<?php
class BankFactory{
    public static function getBank($name){
        if ($name == "TPBank"){
            return new TPBank();
        }elseif ($name == "Vietcombank"){
            return new Vietcombank();
        }else{
            return null;
        }
    }
}