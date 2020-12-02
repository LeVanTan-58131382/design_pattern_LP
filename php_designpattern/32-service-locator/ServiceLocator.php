<?php

namespace ServiceLocatorPattern;

class ServiceLocator {
    private static Cache $cache;

    static function init()
    {
        self::$cache = new Cache();
    }

    public static function getService(string $jndiName):Service{

    $service = self::$cache->getService($jndiName);

      if($service != null){
          return $service;
      }

      $context = new InitialContext();
      $service1 = $context->lookup($jndiName);
      self::$cache->addService($service1);
      return $service1;
   }
}