<?php

class Singleton_object{
    private static ?Singleton_object $instance = null;

    private function __construct(){}
    /**
     * @return DemoSingleton|null
     */
    public static function getInstance(): ?Singleton_object
    {
        if(self::$instance !== null){
            return self::$instance;
        }
        else{
            self::$instance = new self();
            return self::$instance;
        }
    }
    public function showMessage(): void{
        echo "Hello world";
    }


}
