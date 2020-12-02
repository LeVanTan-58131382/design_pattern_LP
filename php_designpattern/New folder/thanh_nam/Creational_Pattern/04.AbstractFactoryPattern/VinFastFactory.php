<?php
require_once "Vinfast4.php";
require_once "VinFast7.php";
require_once "CarFactory.php";
class VinFastFactory extends CarFactory{
  public function getCar($car)
  {
      if ($car == null){
          return null;
      }

      if($car == "Vinfast4"){
          return new Vinfast4();
      }elseif ($car == "Vinfast7"){
          return new VinFast7();
      }

      return null;
  }
}