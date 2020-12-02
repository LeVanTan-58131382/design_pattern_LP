<?php


class FilterChain
{
    private $filters = array();
    private $target;

    public function __construct()
    {
        //$this->target = new Target();
    }

    function addFilter(Filter $filter)
    {
        array_push($this->filters,$filter);
    }

    function execute(string $request){
        foreach ($this->filters as $key => $filter){
            $filter->execute($request);
        }
        $this->target->execute($request);
    }

    function setTarget(Target $target)
    {
        $this->target = $target;
    }
}