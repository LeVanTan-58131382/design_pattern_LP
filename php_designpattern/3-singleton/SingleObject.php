<?php


class SingleObject
{
    private static ?SingleObject $instance = null;

    //private function SingleObject(){}
    private function __construct(){}

    public static function getInstance() :SingleObject{
        if (self::$instance !== null){
            return self::$instance;
        }
        self::$instance = new self();
            return self::$instance;
    }
    public function showMessage() :void{
        echo "Hello world!";
    }
}
