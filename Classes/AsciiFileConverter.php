<?php

namespace Classes;

use Classes\Factory\File;
use Classes\Factory\FileConverter;

class AsciiFileConverter extends FileConverter
{
    public function getFile($fileName): File
    {
        return new AsciiFile($fileName);
    }
}