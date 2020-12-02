<?php

namespace ServiceLocatorPattern;

class Cache {

    private array $services;

    public function __construct(){
      $this->services = [];
   }

public function getService(string $serviceName){
    foreach ($this->services as $service) {
        if($service->getName() == $serviceName){
            echo "Returning cached  " . $serviceName . " object" . "<br>";
            return $service;
        }
    }
      return null;
   }

   public function addService(Service $newService){
        $exists = false;
      foreach ($this->services as $service) {
          if($service->getName() == $newService->getName()){
              $exists = true;
          }
      }
      if(!$exists){
          $this->services[] = $newService;
      }
   }
}