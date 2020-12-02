<?php
require_once "nameRespository.php";

$colour = new nameRespository();
 for ($i = $colour->getIterator(); $i->hasNext();){
     $colour = $i->next();
     echo "Coulor: ".$colour . "<br>";
 }