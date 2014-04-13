<?php

/**
 * NOTE: this file is meant to be used when loading underlying libraries
 * to not include each file manually thus allowing for easy modification
 * of module structure.
 */

$ai1ec_extensions_cwd = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;

require $ai1ec_extensions_cwd . 'extension.php';
require $ai1ec_extensions_cwd . 'extension-license.php';