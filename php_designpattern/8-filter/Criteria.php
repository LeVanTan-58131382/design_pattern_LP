<?php
namespace Filter;
require_once ("Person.php");

interface Criteria{
    public function meetCriteria($person): array ;
}