<?php

namespace Classes;

use Classes\Factory\File;

class AsciiFile implements File
{

    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }
  
    //Path to input files should be in .env
    public function getFilePath(): string
    {
        return __DIR__ . '/../input/'.$this->fileName;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }
    
    public function getFileData():string
    {
        return file_get_contents($this->getFilePath());
    }

    //Path to output files should be in .env
    public function save($fileData)
    {
        file_put_contents(__DIR__ . '/../output/'.$this->fileName, $fileData);
    }
}