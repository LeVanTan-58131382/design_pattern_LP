<?php
require_once "Car.php";
 class Vinfast4 implements Car{
     public function build(): void
     {
         echo "This is Vinfast Sedan 4";
     }
 }