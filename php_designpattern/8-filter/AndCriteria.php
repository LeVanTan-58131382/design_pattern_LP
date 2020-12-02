<?php

namespace Filter;


class AndCriteria implements Criteria
{
    private $criteria;
    private $otherCriteria;

    public function __construct(Criteria $criteria, Criteria $otherCriteria) {
      $this->criteria = $criteria;
      $this->otherCriteria = $otherCriteria;
   }

    public function meetCriteria($persons): array
    {
        $firstCriteriaPersons = $this->criteria->meetCriteria($persons);
      return $this->otherCriteria->meetCriteria($firstCriteriaPersons);
    }

}
