<?php

define('ASSET_COMPRESS_TMP', APP . 'Plugin' . DS . 'AssetCompress' . DS . 'parsedconfig' . DS);
Configure::write('Dispatcher.filters.asset_compress', 'AssetCompress.AssetCompressor');
