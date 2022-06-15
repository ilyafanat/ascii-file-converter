<?php

require_once 'vendor/autoload.php';

use Classes\AsciiFileConverter;

$dir = 'input';
$files = array_diff(scandir($dir), ['..', '.']);

$asciiFile = new AsciiFileConverter();
foreach ($files as $file) {
    $asciiFile->convert($file);
}