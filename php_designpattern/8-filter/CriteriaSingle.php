<?php

namespace Filter;


class CriteriaSingle implements Criteria
{
    public function meetCriteria($persons): array
    {
        $singlePersons = [];

        foreach ($persons as $person) {
            if (strcmp($person->getMaritalStatus(),"Single")==0) {
                array_push($singlePersons, $person);
            }
        }
        return $singlePersons;
    }

}
