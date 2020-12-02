<?php

class SingletonObject{
    private static ?SingletonObject $instance = null;

    private function __construct()
    {}

    public static function getInstance() :SingletonObject
    {
        if(self::$instance != null){
            return self::$instance;
        }
        self::$instance = new self();
        return self::$instance;
    }
    public function getMessage(){
        echo "Hello";
    }
}