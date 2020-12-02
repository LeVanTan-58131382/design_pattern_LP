<?php
require_once "Real_Image.php";
require_once "Image.php";
class Proxy_Image implements Image{
    private $filename;
    private $realname;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function display()
    {
        if ($this->realname == null){
            $this->realname = new Real_Image($this->filename);
        }
        $this->realname->display();
    }
}