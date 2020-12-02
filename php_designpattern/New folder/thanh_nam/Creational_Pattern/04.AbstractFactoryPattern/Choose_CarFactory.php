<?php
require_once "VinFastFactory.php";
require_once "BMWFactory.php";
class Choose_CarFactory{
    private static ?Choose_CarFactory $instance = null;

    private function __construct()
    {
    }

    /**
     * @return Choose_CarFactory|null
     */
    public static function getInstance(): ?Choose_CarFactory
    {
        if (self::$instance != null){
            return self::$instance;
        }
        self::$instance = new self();
        return self::$instance;
    }

    public function ChooseCar($typeCar){
        if ($typeCar == "Vinfast"){
            return new VinFastFactory();
        }elseif ($typeCar == "BMW"){
            return new BMWFactory();
        }
        return null;
    }
}