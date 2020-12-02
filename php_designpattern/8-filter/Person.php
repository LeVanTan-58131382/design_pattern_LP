<?php
namespace Filter;
class Person {

    private $name;
    private $gender;
    private $maritalStatus;

   public function __construct(string $name, string $gender, string $maritalStatus){
      $this->name = $name;
      $this->gender = $gender;
      $this->maritalStatus = $maritalStatus;		
   }

    public function  getName():string {
      return $this->name;
   }
   public function getGender():string {
      return $this->gender;
   }
   public function  getMaritalStatus():string {
      return $this->maritalStatus;
   }	
}