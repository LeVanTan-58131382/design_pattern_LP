<?php


class ProxyImage implements Image
{
    private $realImage;
    private $fileName;

    public function ProxyImage($fileNameIn)
    {
        $this->fileName = $fileNameIn;
    }

    function display(): void
    {
        // TODO: Implement display() method.
        if($this->realImage == null)
        {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->display();
    }
}