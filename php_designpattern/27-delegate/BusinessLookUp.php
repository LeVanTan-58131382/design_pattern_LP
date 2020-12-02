<?php


class BusinessLookUp
{
    function getBusinessService($serviceType)
    {
        if($serviceType == "EJB"){
            return new EJBServicesI();
        } else {
            return new JMSServicesI();
        }
    }
}