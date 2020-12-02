<?php
require_once "Service.php";
class Cache{
    private array $services;

    public function __construct()
    {
        $this->services = [];
    }

    function getService(string $serviceName) : ?Service
    {
        foreach ($this->services as $service){
            if($service->getName() === $serviceName){
                echo "Returning cached". $serviceName . " object";
                return $service;
            }
        }
        return null;
    }

    function addService(Service $serviceName) : void{
        $exists = false;
        foreach ($this->services as $service){
            if($service->getName() ===  $serviceName->getName()){
                $exists = true;
            }
            if (!$exists){
                $service->$this->addService($serviceName);
            }
        }
    }
}