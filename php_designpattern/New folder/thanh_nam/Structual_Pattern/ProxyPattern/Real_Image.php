<?php
require_once "Image.php";
class Real_Image implements Image{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->loadFile($fileName);
    }

    public function display()
    {
        echo "File name your loading..." . $this->fileName;

    }
    private function loadFile($filename){
        echo "Loading ".$filename ."<br>";
    }
}