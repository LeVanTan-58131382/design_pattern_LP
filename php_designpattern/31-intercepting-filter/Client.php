<?php


class Client
{
    private $filterManager;
    function setFilterManager(FilterManager $filterManager){
        $this->filterManager = $filterManager;
    }
    function sendRequest(string $request){
        $this->filterManager->filterRequest($request);
    }
}