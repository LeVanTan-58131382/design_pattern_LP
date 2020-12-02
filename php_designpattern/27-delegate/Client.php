<?php


class Client
{
    private $businessService;

    public function __construct(BusinessDelegate $businessServiceIn)
    {
        $this->businessService = $businessServiceIn;
    }

    function doTask(){
        $this->businessService->doTask();
    }
}