<?php

namespace Classes\Factory;

interface File
{
    public function getFilePath(): string;
    public function getFileName(): string;
    public function getFileData(): string;
    public function save($fileData);
}