<?php

namespace Classes\Factory;

use Exception;

abstract class FileConverter
{

    abstract public function getFile($fileName): File;

    public function convert($fileName): void
    {
        try {
            $file = $this->getFile($fileName);
            $fileData = $file->getFileData();
            $symbols = explode(' ', $fileData);
            $returnString = '';
            foreach ($symbols as $symbol) {
                $returnString .= chr($symbol);
            }
            $file->save(iconv('ASCII', 'UTF-8', $returnString));
        }  catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}