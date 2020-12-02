<?php

namespace Filter;
require_once ("Person.php");
require_once ("Criteria.php");

class CriteriaFemale implements Criteria
{
    public function meetCriteria($persons): array
    {
        $femalePersons = [];
      foreach ($persons as $person) {
          if(strcmp($person->getGender(),"Female")==0){
              array_push($femalePersons,$person);
          }
      }
      return $femalePersons;
    }

}
