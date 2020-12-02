<?php


class BusinessDelegate
{
    private $serviceType;
    private $businessLookup;
    private $businessService;

    public function __construct()
    {
        $this->businessLookup = new BusinessLookUp();
    }

    function setServiceType($serviceTypeIn)
    {
        $this->serviceType = $serviceTypeIn;
    }

    function doTask(){
        $this->businessService = $this->businessLookup->getBusinessService($this->serviceType);
        $this->businessService->doProcessing();
    }
}