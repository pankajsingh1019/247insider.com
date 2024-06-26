<?php

/**
 * MS SQL layer for DBO
 *
 * PHP versions 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Datasources
 * @subpackage    Datasources.Model.Datasource.Database
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('NativeDriverSource', 'Model/Datasource');

/**
 * MS SQL layer without DBO
 *
 * Uses mssql instead of PDO::sqlsrv. Requires the `mssql` extension to be enabled.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.model.datasources.dbo
 */
class Mssql extends NativeDriverSource {

	/**
	 * Driver description
	 *
	 * @var string
	 */
	public $description = "MS SQL Driver";

	/**
	 * Starting quote character for quoted identifiers
	 *
	 * @var string
	 */
	public $startQuote = "[";

	/**
	 * Ending quote character for quoted identifiers
	 *
	 * @var string
	 */
	public $endQuote = "]";

	/**
	 * Creates a map between field aliases and numeric indexes.  Workaround for the
	 * SQL Server driver's 30-character column name limitation.
	 *
	 * @var array
	 */
	protected $_fieldMappings = array();

	/**
	 * Base configuration settings for MS SQL driver
	 *
	 * @var array
	 */
	protected $_baseConfig = array(
		'persistent' => true,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'cake',
		'port' => '1433',
	);

	/**
	 * MS SQL column definition
	 *
	 * @var array
	 */
	public $columns = array(
		'primary_key' => array('name' => 'IDENTITY (1, 1) NOT NULL'),
		'string' => array('name' => 'varchar', 'limit' => '255'),
		'text' => array('name' => 'text'),
		'integer' => array('name' => 'int', 'formatter' => 'intval'),
		'float' => array('name' => 'numeric', 'formatter' => 'floatval'),
		'datetime' => array('name' => 'datetime', 'format' => 'Y-m-d H:i:s', 'formatter' => 'date'),
		'timestamp' => array('name' => 'timestamp', 'format' => 'Y-m-d H:i:s', 'formatter' => 'date'),
		'time' => array('name' => 'datetime', 'format' => 'H:i:s', 'formatter' => 'date'),
		'date' => array('name' => 'datetime', 'format' => 'Y-m-d', 'formatter' => 'date'),
		'binary' => array('name' => 'image'),
		'boolean' => array('name' => 'bit')
	);

	/**
	 * Index of basic SQL commands
	 *
	 * @var array
	 * @access protected
	 */
	protected $_commands = array(
		'begin' => 'BEGIN TRANSACTION',
		'commit' => 'COMMIT',
		'rollback' => 'ROLLBACK'
	);

	/**
	 * Define if the last query had error
	 *
	 * @var string
	 * @access private
	 */
	protected $_lastQueryHadError = false;

	/**
	 * MS SQL DBO driver constructor; sets SQL Server error reporting defaults
	 *
	 * @param array $config Configuration data from app/config/databases.php
	 * @return boolean True if connected successfully, false on error
	 */
	function __construct($config, $autoConnect = true) {
		ini_set('mssql.timeout', 1000);
		if ($autoConnect) {
			if (!function_exists('mssql_min_message_severity')) {
				trigger_error(__("PHP SQL Server interface is not installed, cannot continue. For troubleshooting information, see http://php.net/mssql/", true), E_USER_WARNING);
			}
			mssql_min_message_severity(15);
			mssql_min_error_severity(2);
		}
		return parent::__construct($config, $autoConnect);
	}

	/**
	 * Connects to the database using options in the given configuration array.
	 *
	 * @return boolean True if the database could be connected, else false
	 */
	public function connect() {
		$config = $this->config;

		$os = env('OS');
		if (!empty($os) && strpos($os, 'Windows') !== false) {
			$sep = ',';
		} else {
			$sep = ':';
		}
		$this->connected = false;

		if (is_numeric($config['port'])) {
			$port = $sep . $config['port']; // Port number
		} elseif ($config['port'] === null || $config['port'] === false) {
			$port = '';   // No port - SQL Server 2005
		} else {
			$port = '\\' . $config['port']; // Named pipe
		}

		if (!$config['persistent']) {
			$this->connection = mssql_connect($config['host'] . $port, $config['login'], $config['password'], true);
		} else {
			$this->connection = mssql_pconnect($config['host'] . $port, $config['login'], $config['password']);
		}

		if (mssql_select_db($config['database'], $this->connection)) {
			$this->_execute("SET DATEFORMAT ymd");
			$this->connected = true;
		}
		return $this->connected;
	}

	/**
	 * Check that MsSQL is installed/loaded
	 *
	 * @return boolean
	 */
	public function enabled() {
		return extension_loaded('mssql');
	}

	/**
	 * Disconnects from database.
	 *
	 * @return boolean True if the database could be disconnected, else false
	 */
	public function disconnect() {
		@mssql_free_result($this->results);
		$this->connected = !@mssql_close($this->connection);
		return !$this->connected;
	}

	/**
	 * Executes given SQL statement.
	 *
	 * @param string $sql SQL statement
	 * @return resource Result resource identifier
	 * @access protected
	 * @deprecated This method will removed in the near future.
	 */
	protected function _execute($sql, $params = null, $prepareOptions = null) {
		$SQL = mssql_query("set ansi_nulls ON", $this->connection);
		$SQL = mssql_query("set ansi_warnings ON", $this->connection);
 		$result = @mssql_query($sql, $this->connection);
		$this->_lastQueryHadError = ($result === false);
		if ($this->_lastQueryHadError) {
			throw new InternalErrorException($this->lastError());
		}
		return $result;
	}

	//custom function to execute SP using mssql_bind
	protected function _executeSP($sql, $params = array(), $prepareOptions = null) {
		$sql = trim($sql);
		if (preg_match('/^(?:CREATE|ALTER|DROP)\s+(?:TABLE|INDEX)/i', $sql)) {
			$statements = array_filter(explode(';', $sql));
			if (count($statements) > 1) {
				$result = array_map(array($this, '_execute'), $statements);
				return array_search(false, $result) === false;
			}
		}

		try {
			$SQL = mssql_query("set ansi_nulls ON", $this->connection);
			$SQL = mssql_query("set ansi_warnings ON", $this->connection);

			foreach ($params as $key => $param) {
				if (empty($param['value']) && $param['value'] !== 0 && $param['value'] !== '0') {
					//$sql = $sql . " '"."',";
					$sql = $sql . " NULL,";
				} else {
					$sql = $sql . " '" . $this->mssql_escape_quote($param["value"]) . "',";
				}
			}

			$sql = substr($sql, 0, -1); //removing the "," at the end of the SP call
//			pr($sql);
			$result = mssql_query($sql, $this->connection);
			if (!$result) {
				throw new Exception(mssql_get_last_message());
			}
			$resource = $data = false;
			$final_result = array();
			$index = 0;
			do {
				$final_result[$index] = array();
				while ($row = mssql_fetch_assoc($result)) {
					$final_result[$index][] = $row;
				}
				$resource = $result;
				$index++;
			} while (mssql_next_result($result));

			mssql_free_result($result);
			return array('resource' => $resource, 'data' => $final_result);
		} catch (Exception $e) {
//			App::uses('CakeEmail', 'Network/Email');
//			$Email = new CakeEmail('directi');
//			$Email->from('accounting-admin@directi.com');
//			$Email->to('sem@intranet.directi.com');
//			$Email->subject('Accounting: Error in Mssql Query');
//			$Email->emailFormat('html');
//			$Email->send('<html><body>An error occured in the SP call: ' . $sql . '<br/><br/> Error Message: ' . $e->getMessage() . '</body></html>');

			return array(
				'resource' => false,
				'data' => array(
					0 => array(
						0 => array(
							'Error_Number' => 9999,
							'Error_Message' => $e->getMessage()
			))));
		}
	}

	private function mssql_escape_quote($param) {
		return str_replace("'", "''", $param);
	}

	/**
	 * Returns an array of sources (tables) in the database.
	 *
	 * @return array Array of tablenames in the database
	 * @deprecated This method will removed in the near future.
	 */
	public function listSources($data = null) {
		$cache = parent::listSources();

		if ($cache != null) {
			return $cache;
		}
		$result = $this->fetchAll('SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES', false);

		if (!$result || empty($result)) {
			return array();
		} else {
			$tables = array();

			foreach ($result as $table) {
				$tables[] = $table[0]['TABLE_NAME'];
			}

			parent::listSources($tables);
			return $tables;
		}
	}

	/**
	 * Returns an array of the fields in given table name.
	 *
	 * @param Model $model Model object to describe
	 * @return array Fields in table. Keys are name and type
	 * @deprecated This method will removed in the near future.
	 */
	public function describe($model) {
		$cache = parent::describe($model);

		if ($cache != null) {
			return $cache;
		}

		$table = $this->fullTableName($model, false, false);
		//Modified schema added,it will work for dbo only
		$cols = $this->fetchAll("SELECT table_schema, COLUMN_NAME as Field, DATA_TYPE as Type, COL_LENGTH('" . $table . "', COLUMN_NAME) as Length, IS_NULLABLE As [Null], COLUMN_DEFAULT as [Default], COLUMNPROPERTY(OBJECT_ID('" . $table . "'), COLUMN_NAME, 'IsIdentity') as [Key], NUMERIC_SCALE as Size FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '" . $table . "' and table_Schema='dbo'", false);

		$fields = false;
		foreach ($cols as $column) {
			$field = $column[0]['Field'];
			$fields[$field] = array(
				'type' => $this->column($column[0]['Type']),
				'null' => (strtoupper($column[0]['Null']) == 'YES'),
				'default' => preg_replace("/^[(]{1,2}'?([^')]*)?'?[)]{1,2}$/", "$1", $column[0]['Default']),
				'length' => intval($column[0]['Length']),
				'key' => ($column[0]['Key'] == '1') ? 'primary' : false
			);
			if ($fields[$field]['default'] === 'null') {
				$fields[$field]['default'] = null;
			} else {
				$this->value($fields[$field]['default'], $fields[$field]['type']);
			}

			if ($fields[$field]['key'] && $fields[$field]['type'] == 'integer') {
				$fields[$field]['length'] = 11;
			} elseif (!$fields[$field]['key']) {
				unset($fields[$field]['key']);
			}
			if (in_array($fields[$field]['type'], array('date', 'time', 'datetime', 'timestamp'))) {
				$fields[$field]['length'] = null;
			}
		}
		$this->_cacheDescription($this->fullTableName($model, false, false), $fields);
		return $fields;
	}

	/**
	 * Returns a quoted and escaped string of $data for use in an SQL statement.
	 *
	 * @param string $data String to be prepared for use in an SQL statement
	 * @param string $column The column into which this data will be inserted
	 * @param boolean $safe Whether or not numeric data should be handled automagically if no column data is provided
	 * @return string Quoted and escaped data
	 */
	public function value($data, $column = null, $safe = false) {
		$parent = parent::value($data, $column, $safe);

		if ($parent != null) {
			return $parent;
		}
		if ($data === null) {
			return 'NULL';
		}
		if (in_array($column, array('integer', 'float', 'binary')) && $data === '') {
			return 'NULL';
		}
		if ($data === '') {
			return "''";
		}

		switch ($column) {
			case 'boolean':
				$data = $this->boolean((bool) $data);
				break;
			default:
				if (get_magic_quotes_gpc()) {
					$data = stripslashes(str_replace("'", "''", $data));
				} else {
					$data = str_replace("'", "''", $data);
				}
				break;
		}

		if (in_array($column, array('integer', 'float', 'binary')) && is_numeric($data)) {
			return $data;
		}
		return "'" . $data . "'";
	}

	/**
	 * Generates the fields list of an SQL query.
	 *
	 * @param Model $model
	 * @param string $alias Alias tablename
	 * @param mixed $fields
	 * @return array
	 */
	public function fields(Model $model, $alias = null, $fields = array(), $quote = true) {
		if (empty($alias)) {
			$alias = $model->alias;
		}
		$fields = parent::fields($model, $alias, $fields, false);
		$count = count($fields);

		if ($count >= 1 && strpos($fields[0], 'COUNT(*)') === false) {
			$result = array();
			for ($i = 0; $i < $count; $i++) {
				$prepend = '';

				if (strpos($fields[$i], 'DISTINCT') !== false) {
					$prepend = 'DISTINCT ';
					$fields[$i] = trim(str_replace('DISTINCT', '', $fields[$i]));
				}
				$fieldAlias = count($this->_fieldMappings);

				if (!preg_match('/\s+AS\s+/i', $fields[$i])) {
					if (substr($fields[$i], -1) == '*') {
						if (strpos($fields[$i], '.') !== false && $fields[$i] != $alias . '.*') {
							$build = explode('.', $fields[$i]);
							$AssociatedModel = $model->{$build[0]};
						} else {
							$AssociatedModel = $model;
						}

						$_fields = $this->fields($AssociatedModel, $AssociatedModel->alias, array_keys($AssociatedModel->schema()));
						$result = array_merge($result, $_fields);
						continue;
					}

					if (strpos($fields[$i], '.') === false) {
						$this->_fieldMappings[$alias . '__' . $fieldAlias] = $alias . '.' . $fields[$i];
						$fieldName = $this->name($alias . '.' . $fields[$i]);
						$fieldAlias = $this->name($alias . '__' . $fieldAlias);
					} else {
						$build = explode('.', $fields[$i]);
						$this->_fieldMappings[$build[0] . '__' . $fieldAlias] = $fields[$i];
						$fieldName = $this->name($build[0] . '.' . $build[1]);
						$fieldAlias = $this->name(preg_replace("/^\[(.+)\]$/", "$1", $build[0]) . '__' . $fieldAlias);
					}
					if ($model->getColumnType($fields[$i]) == 'datetime') {
						$fieldName = "CONVERT(VARCHAR(20), {$fieldName}, 20)";
					}
					$fields[$i] = "{$fieldName} AS {$fieldAlias}";
				}
				$result[] = $prepend . $fields[$i];
			}
			return $result;
		} else {
			return $fields;
		}
	}

	/**
	 * Generates and executes an SQL INSERT statement for given model, fields, and values.
	 * Removes Identity (primary key) column from update data before returning to parent, if
	 * value is empty.
	 *
	 * @param Model $model
	 * @param array $fields
	 * @param array $values
	 * @param mixed $conditions
	 * @return array
	 */
	public function create(Model $model, $fields = null, $values = null) {
		if (!empty($values)) {
			$fields = array_combine($fields, $values);
		}
		$primaryKey = $this->_getPrimaryKey($model);

		if (array_key_exists($primaryKey, $fields)) {
			if (empty($fields[$primaryKey])) {
				unset($fields[$primaryKey]);
			} else {
				$this->_execute('SET IDENTITY_INSERT ' . $this->fullTableName($model) . ' ON');
			}
		}
		$result = parent::create($model, array_keys($fields), array_values($fields));
		if (array_key_exists($primaryKey, $fields) && !empty($fields[$primaryKey])) {
			$this->_execute('SET IDENTITY_INSERT ' . $this->fullTableName($model) . ' OFF');
		}
		return $result;
	}

	/**
	 * Generates and executes an SQL UPDATE statement for given model, fields, and values.
	 * Removes Identity (primary key) column from update data before returning to parent.
	 *
	 * @param Model $model
	 * @param array $fields
	 * @param array $values
	 * @param mixed $conditions
	 * @return array
	 */
	public function update(Model $model, $fields = array(), $values = null, $conditions = null) {
		if (!empty($values)) {
			$fields = array_combine($fields, $values);
		}
		if (isset($fields[$model->primaryKey])) {
			unset($fields[$model->primaryKey]);
		}
		if (empty($fields)) {
			return true;
		}
		return parent::update($model, array_keys($fields), array_values($fields), $conditions);
	}

	/**
	 * Returns a formatted error message from previous database operation.
	 *
	 * @return string Error message with error number
	 * @deprecated This method will removed in the near future.
	 */
	public function lastError(PDOStatement $query = NULL) {
		if ($this->_lastQueryHadError) {
			$error = mssql_get_last_message();
			if ($error && !preg_match('/contexto de la base de datos a|contesto di database|changed database|contexte de la base de don|datenbankkontext/i', $error)) {
				return $error;
			}
		}
		return null;
	}

	/**
	 * Returns number of affected rows in previous database operation. If no previous operation exists,
	 * this returns false.
	 *
	 * @return integer Number of affected rows
	 */
	public function lastAffected($source = NULL) {
		if ($this->_result) {
			return mssql_rows_affected($this->connection);
		}
		return null;
	}

	/**
	 * Returns number of rows in previous resultset. If no previous resultset exists,
	 * this returns false.
	 *
	 * @return integer Number of rows in resultset
	 */
	public function lastNumRows($source = NULL) {
		if ($this->_result) {
			return @mssql_num_rows($this->_result);
		}
		return null;
	}

	/**
	 * Returns the ID generated from the previous INSERT operation.
	 *
	 * @param unknown_type $source
	 * @return in
	 */
	public function lastInsertId($source = null) {
		$id = $this->fetchRow('SELECT SCOPE_IDENTITY() AS insertID', false);
		return $id[0]['insertID'];
	}

	/**
	 * Returns a limit statement in the correct format for the particular database.
	 *
	 * @param integer $limit Limit of results returned
	 * @param integer $offset Offset from which to start results
	 * @return string SQL limit/offset statement
	 */
	public function limit($limit, $offset = null) {
		if ($limit) {
			$rt = '';
			if (!strpos(strtolower($limit), 'top') || strpos(strtolower($limit), 'top') === 0) {
				$rt = ' TOP';
			}
			$rt .= ' ' . $limit;
			if (is_int($offset) && $offset > 0) {
				$rt .= ' OFFSET ' . $offset;
			}
			return $rt;
		}
		return null;
	}

	/**
	 * Converts database-layer column types to basic types
	 *
	 * @param string $real Real database-layer column type (i.e. "varchar(255)")
	 * @return string Abstract column type (i.e. "string")
	 */
	public function column($real) {
		if (is_array($real)) {
			$col = $real['name'];

			if (isset($real['limit'])) {
				$col .= '(' . $real['limit'] . ')';
			}
			return $col;
		}
		$col = str_replace(')', '', $real);
		$limit = null;
		if (strpos($col, '(') !== false) {
			list($col, $limit) = explode('(', $col);
		}

		if (in_array($col, array('date', 'time', 'datetime', 'timestamp'))) {
			return $col;
		}
		if ($col == 'bit') {
			return 'boolean';
		}
		if (strpos($col, 'int') !== false) {
			return 'integer';
		}
		if (strpos($col, 'char') !== false) {
			return 'string';
		}
		if (strpos($col, 'text') !== false) {
			return 'text';
		}
		if (strpos($col, 'binary') !== false || $col == 'image') {
			return 'binary';
		}
		if (in_array($col, array('float', 'real', 'decimal', 'numeric'))) {
			return 'float';
		}
		return 'text';
	}

	/**
	 * Enter description here...
	 *
	 * @param unknown_type $results
	 */
	public function resultSet($results) {
		$this->results = $results;
		$this->map = array();
		$numFields = mssql_num_fields($results);
		$index = 0;
		$j = 0;

		while ($j < $numFields) {
			$column = mssql_field_name($results, $j);

			if (strpos($column, '__')) {
				if (isset($this->_fieldMappings[$column]) && strpos($this->_fieldMappings[$column], '.')) {
					$map = explode('.', $this->_fieldMappings[$column]);
				} elseif (isset($this->_fieldMappings[$column])) {
					$map = array(0, $this->_fieldMappings[$column]);
				} else {
					$map = array(0, $column);
				}
				$this->map[$index++] = $map;
			} else {
				$this->map[$index++] = array(0, $column);
			}
			$j++;
		}
	}

	/**
	 * Builds final SQL statement
	 *
	 * @param string $type Query type
	 * @param array $data Query data
	 * @return string
	 */
	public function renderStatement($type, $data) {
		switch (strtolower($type)) {
			case 'select':
				extract($data);
				$fields = trim($fields);

				if (strpos($limit, 'TOP') !== false && strpos($fields, 'DISTINCT ') === 0) {
					$limit = 'DISTINCT ' . trim($limit);
					$fields = substr($fields, 9);
				}

				if (preg_match('/offset\s+([0-9]+)/i', $limit, $offset)) {
					$limit = preg_replace('/\s*offset.*$/i', '', $limit);
					preg_match('/top\s+([0-9]+)/i', $limit, $limitVal);
					$offset = intval($offset[1]) + intval($limitVal[1]);
					$rOrder = $this->__switchSort($order);
					list($order2, $rOrder) = array($this->_mapFields($order), $this->_mapFields($rOrder));
					return "SELECT * FROM (SELECT {$limit} * FROM (SELECT TOP {$offset} {$fields} FROM {$table} {$alias} {$joins} {$conditions} {$group} {$order}) AS Set1 {$rOrder}) AS Set2 {$order2}";
				} else {
					return "SELECT {$limit} {$fields} FROM {$table} {$alias} {$joins} {$conditions} {$group} {$order}";
				}
				break;
			case "schema":
				extract($data);

				foreach ($indexes as $i => $index) {
					if (preg_match('/PRIMARY KEY/', $index)) {
						unset($indexes[$i]);
						break;
					}
				}

				foreach (array('columns', 'indexes') as $var) {
					if (is_array(${$var})) {
						${$var} = "\t" . implode(",\n\t", array_filter(${$var}));
					}
				}
				return "CREATE TABLE {$table} (\n{$columns});\n{$indexes}";
				break;
			default:
				return parent::renderStatement($type, $data);
				break;
		}
	}

	/**
	 * Reverses the sort direction of ORDER statements to get paging offsets to work correctly
	 *
	 * @param string $order
	 * @return string
	 * @access private
	 */
	protected function __switchSort($order) {
		$order = preg_replace('/\s+ASC/i', '__tmp_asc__', $order);
		$order = preg_replace('/\s+DESC/i', ' ASC', $order);
		return preg_replace('/__tmp_asc__/', ' DESC', $order);
	}

	/**
	 * Translates field names used for filtering and sorting to shortened names using the field map
	 *
	 * @param string $sql A snippet of SQL representing an ORDER or WHERE statement
	 * @return string The value of $sql with field names replaced
	 * @access private
	 */
	protected function _mapFields($sql) {
		if (empty($sql) || empty($this->_fieldMappings)) {
			return $sql;
		}
		foreach ($this->_fieldMappings as $key => $val) {
			$sql = preg_replace('/' . preg_quote($val) . '/', $this->name($key), $sql);
			$sql = preg_replace('/' . preg_quote($this->name($val)) . '/', $this->name($key), $sql);
		}
		return $sql;
	}

	/**
	 * Returns an array of all result rows for a given SQL query.
	 * Returns false if no rows matched.
	 *
	 * @param string $sql SQL statement
	 * @param boolean $cache Enables returning/storing cached query results
	 * @return array Array of resultset rows, or false if no rows matched
	 */
	public function read(Model $model, $queryData = array(), $recursive = null) {
		$results = parent::read($model, $queryData, $recursive);
		$this->_fieldMappings = array();
		return $results;
	}

	/**
	 * Fetches the next row from the current result set
	 *
	 * @return unknown
	 */
	public function fetchResult() {
		if ($row = mssql_fetch_row($this->results)) {
			$resultRow = array();
			$i = 0;

			foreach ($row as $index => $field) {
				list($table, $column) = $this->map[$index];
				$resultRow[$table][$column] = $row[$index];
				$i++;
			}
			return $resultRow;
		} else {
			return false;
		}
	}

	/**
	 * Inserts multiple values into a table
	 *
	 * @param string $table
	 * @param string $fields
	 * @param array $values
	 * @access protected
	 */
	public function insertMulti($table, $fields, $values) {
		$primaryKey = $this->_getPrimaryKey($table);
		$hasPrimaryKey = $primaryKey != null && (
				(is_array($fields) && in_array($primaryKey, $fields) || (is_string($fields) && strpos($fields, $this->startQuote . $primaryKey . $this->endQuote) !== false))
				);
		if ($hasPrimaryKey) {
			$this->_execute('SET IDENTITY_INSERT ' . $this->fullTableName($table) . ' ON');
		}
		parent::insertMulti($table, $fields, $values);
		if ($hasPrimaryKey) {
			$this->_execute('SET IDENTITY_INSERT ' . $this->fullTableName($table) . ' OFF');
		}
	}

	/**
	 * Generate a database-native column schema string
	 *
	 * @param array $column An array structured like the following: array('name'=>'value', 'type'=>'value'[, options]),
	 *   where options can be 'default', 'length', or 'key'.
	 * @return string
	 */
	public function buildColumn($column) {
		$result = preg_replace('/(int|integer)\([0-9]+\)/i', '$1', parent::buildColumn($column));
		if (strpos($result, 'DEFAULT NULL') !== false) {
			$result = str_replace('DEFAULT NULL', 'NULL', $result);
		} elseif (array_keys($column) == array('type', 'name')) {
			$result .= ' NULL';
		}
		return $result;
	}

	/**
	 * Format indexes for create table
	 *
	 * @param array $indexes
	 * @param string $table
	 * @return string
	 */
	public function buildIndex($indexes, $table = null) {
		$join = array();

		foreach ($indexes as $name => $value) {
			if ($name == 'PRIMARY') {
				$join[] = 'PRIMARY KEY (' . $this->name($value['column']) . ')';
			} elseif (isset($value['unique']) && $value['unique']) {
				$out = "ALTER TABLE {$table} ADD CONSTRAINT {$name} UNIQUE";

				if (is_array($value['column'])) {
					$value['column'] = implode(', ', array_map(array(&$this, 'name'), $value['column']));
				} else {
					$value['column'] = $this->name($value['column']);
				}
				$out .= "({$value['column']});";
				$join[] = $out;
			}
		}
		return $join;
	}

	/**
	 * Makes sure it will return the primary key
	 *
	 * @param mixed $model
	 * @access protected
	 * @return string
	 */
	protected function _getPrimaryKey(Model $model) {
		$schema = $this->describe($model);
		foreach ($schema as $field => $props) {
			if (isset($props['key']) && $props['key'] == 'primary') {
				return $field;
			}
		}
		return null;
	}

}
