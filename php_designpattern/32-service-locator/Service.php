<?php

namespace ServiceLocatorPattern;

interface Service
{
    public function getName():string ;
   public  function execute();
}