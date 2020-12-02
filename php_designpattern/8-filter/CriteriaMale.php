<?php

namespace Filter;
require_once ("Person.php");
require_once ("Criteria.php");

class CriteriaMale implements Criteria
{
    public function meetCriteria($persons): array
    {
        $malePersons = [];
      foreach ($persons as $person) {
          if( strcmp($person->getGender(),"Male")==0){
              array_push($malePersons,$person);
          }
      }
      return $malePersons;
    }

}
