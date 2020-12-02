<?php


class FilterManager
{
    private $filterChain;

    public function __construct(Target $target)
    {
        $this->filterChain = new FilterChain();
        $this->filterChain->setTarget($target);
    }

    function setFilter(Filter $filter)
    {
        $this->filterChain->addFilter($filter);
    }

    function filterRequest(string $request){
        $this->filterChain->execute($request);
    }
}