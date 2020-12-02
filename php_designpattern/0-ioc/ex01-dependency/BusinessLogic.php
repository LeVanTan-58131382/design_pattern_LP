<?php

require_once './DataAccess.php';

//https://www.tutorialsteacher.com/ioc
class BusinessLogic {

    private DataAccess $_dataAccess;

    public function __construct() {
        $this->_dataAccess = new DataAccess();
    }

    public function getCustomerName(int $id): string {
        return $this->_dataAccess->getCustomerName($id);
    }

}

//Application
$foo = new BusinessLogic();
echo $foo->getCustomerName(9);
