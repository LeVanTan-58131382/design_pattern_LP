<?php
require_once "InitialContext.php";
require_once "Service.php";
require_once "Cache.php";
class ServiceLocator{
    private static ?Cache $cache = null;
//    private Cache $cache;

    public function __construct()
    {
        self::$cache = new Cache();
//        $this->cache= new Cache();
    }

     function getService(string $jndiName) : Service{
        $service = self::$cache->getService($jndiName);
//        $service = $this->cache->getService($jndiName);

       if($service != null){
           return $service;
       }

       $context = new InitialContext();
       $service = $context->lookup($jndiName);
       self::$cache->addService($service);
//        $this->cache->addService($service);
       return $service;
    }

}