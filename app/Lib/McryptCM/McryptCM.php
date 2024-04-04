<?php

define('AD_ENCODED_STRING_SEP', "|");
define('AD_ATTRIBUTE_NAME_SEP', "\x1e"); // keep these values in double quoted string. '\x' stands for escape char for hexadecimal chars
define('AD_NAME_VALUE_SEP', "\x1d"); // keep these values in double quoted string. '\x' stands for escape char for hexadecimal chars

class McryptCM {

    private $key;
    private $resMKript;
//	private $twoWayHash; here we mean same text encrypts to same cipher every time you apply this method.
    private $blockSize;

    public function __construct() {
        $this->key = 'KLdfd34ASDFj$%@sdfs3fsdf2SFEWXS';
        $this->resMKript = mcrypt_module_open('blowfish', '', 'cbc', '');
        $this->blockSize = mcrypt_enc_get_block_size($this->resMKript);
//NOTE: for twoWayHash, we can use mode 'ecb' with out static 'iv'. but the issue is 'ecb' is little slower than 'cbc'
//so we are using 'cbc' with static 'iv' for twoWayHashes
    }

    private function getIV() {
        $iv_size = mcrypt_enc_get_iv_size($this->resMKript);
        $iv = '';

        if (true) {
            for ($i = 0; $i < $iv_size; $i++) {
                $iv .= 'X';
            }
        } else {
            $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($this->resMKript), mt_rand());
        }

        return $iv;
    }

    private function prependIVtoTheCipher($iv, $cipher) {
        return $iv . $cipher;
    }

    private function seperateCipherAndIV($cipher) {
        $data['iv'] = substr($cipher, 0, mcrypt_enc_get_iv_size($this->resMKript));
        $data['cipher'] = substr($cipher, mcrypt_enc_get_iv_size($this->resMKript));
        if ($data['iv'] != $this->getIV()) {
            $data['iv'] = $this->getIV();
            $data['cipher'] = $cipher;
        } else {
//my_var_dump("IV found in cipher");
        }

        return $data;
    }

    /**
     * returns encrypted binary string.
     * @param input data in binary string format
     */
    private function encrypt($input) {
//we need to create 'iv' everytime we try to encrypt data.
        $iv = $this->getIV();

//before u do any encryption/decryption, you have to initialise module with key and iv
        mcrypt_generic_init($this->resMKript, $this->key, $iv);

//now encrypt the data. before that, compress it to have the cipher compact.
        $input = $this->_gzdeflate($input);

//padding with \c, c = number of bytes needed to complete the last block
//to ensure the same padding in node and php
        $pad = $this->blockSize - (strlen($input) % $this->blockSize);
        $input = $input . str_repeat(chr($pad), $pad);

        $cipher = mcrypt_generic($this->resMKript, $input);

        return $cipher;
    }

    /**
     * returns decrypted data. remember to pass base64 decoded data.
     *
     * @param base64 decoded data
     * @return plain text if successful
     */
    private function decrypt($cipher) {
//get the cipher and iv
        $cipherData = $this->seperateCipherAndIV($cipher);
//initialise the module
        mcrypt_generic_init($this->resMKript, $this->key, $cipherData['iv']);

//decrypt
        $decryptedData = mdecrypt_generic($this->resMKript, $cipherData['cipher']);

//uncompress
        echo $uncompressedData = $this->_gzinflate($decryptedData);

        if ($uncompressedData === false) {
            ExceptionFactory::throwCryptographyException('data could not be uncompressed');
        }

        return $uncompressedData;
    }

    private function _gzdeflate($input) {
        return gzdeflate($input);
    }

    private function _gzinflate($input) {
        return gzinflate($input);
    }

    public function encodeMime($input) {
        $enc = $this->encrypt($input);

        $encodedString = base64_encode($enc);

        if (isset($_GET['cid']) && $_GET['cid'] == '8CUSN2RK5') {
            if (defined('IS_CACHED_MEDIANET_REQUEST') && IS_CACHED_MEDIANET_REQUEST) {
                $replaceArray = array('+' => '-', '/' => '_');
                return strtr($encodedString, $replaceArray);
            }
        }
        return $encodedString;
    }

    function decodeMime($mimeEncodedCipher) {
        $transArray = array('-' => '+', '_' => '/');
        $mimeEncodedCipher = strtr($mimeEncodedCipher, $transArray);

        if (!$this->isStringSet($mimeEncodedCipher)) {
            return null;
        }

        $binaryString = base64_decode($mimeEncodedCipher);

        $decodedMime = $this->decrypt($binaryString);

        return $decodedMime;
    }

    public function __destruct() {
        if ($this->resMKript) {
            mcrypt_module_close($this->resMKript);
        }
    }

    function isStringSet($string) {
        return (!is_null($string) && $string !== '');
    }

    function generateString($params) {
        $encodedCME = '';
        foreach ($params as $name => $value) {
            if (is_integer($name)) {
                $nameValueString = $name . AD_NAME_VALUE_SEP . $value;
                if (strlen($nameValueString) != 0) {
                    $encodedNameValue = $this->encodeMime($nameValueString);
                }
                $encodedCME .= $encodedNameValue . AD_ENCODED_STRING_SEP;
            }
        }

        $nameValueString = '';
        $encodedNameValueSeperatedString = '';
        foreach ($params as $name => $value) {
            if (!is_integer($name)) {
                $nameValueString .= $name . AD_NAME_VALUE_SEP . $value . AD_ATTRIBUTE_NAME_SEP;
            }
        }
        if (strlen($nameValueString) != 0) {
            $encodedNameValueSeperatedString = $this->encodeMime($nameValueString);
        }

        return $encodedCME = $encodedNameValueSeperatedString . AD_ENCODED_STRING_SEP . AD_ENCODED_STRING_SEP . $encodedCME;
    }

}

?>