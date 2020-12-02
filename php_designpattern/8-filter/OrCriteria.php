<?php

namespace Filter;


class OrCriteria implements Criteria
{
    private  $criteria;
    private  $otherCriteria;

    public function __construct(Criteria $criteria, Criteria $otherCriteria) {
      $this->criteria = $criteria;
      $this->otherCriteria = $otherCriteria;
   }

    public function meetCriteria($persons): array
    {
        $firstCriteriaItems = $this->criteria->meetCriteria($persons);
        $otherCriteriaItems = $this->otherCriteria->meetCriteria($persons);

      foreach ($otherCriteriaItems as $person) {
          if(! in_array($person,$firstCriteriaItems)){
              array_push($firstCriteriaItems,$person);
          }
      }
      return $firstCriteriaItems;
    }

}
