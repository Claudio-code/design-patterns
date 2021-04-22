<?php

require_once "Image.php";
require_once "RealImage.php";

class ProxyImage extends Image
{
    private string $fileName;
    private ?RealImage $realImage = null;
    
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function displayImage(): void
    {
        if (!$this->realImage) {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->displayImage();
    }
}
