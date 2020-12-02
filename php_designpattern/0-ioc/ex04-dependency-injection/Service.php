<?php

require_once './BusinessLogic.php';

class Service {

    private BusinessLogic $businessLogic;

    public function __construct() {
        $this->businessLogic = new BusinessLogic(new DataAccess());
    }

    public function getCustomerName(int $id): string {
        return $this->businessLogic->getCustomerName($id);
    }

}

//Application
$foo = new Service();
$foo->getCustomerName(9);
