<?php

require_once 'Image.php';

class RealImage extends Image
{
    private string $fileName;
    
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadImageFromDisk();
    }

    private function loadImageFromDisk(): void
    {
        print_r("loading file to hard disk => $this->fileName \n");
    }

    public function displayImage(): void
    {
        print_r("show file name => $this->fileName \n");
    }
}
