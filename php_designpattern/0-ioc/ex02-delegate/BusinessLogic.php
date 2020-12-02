<?php

require_once './DataAccess.php';
require_once './DataAccessFactory.php';

class BusinessLogic {

    private DataAccess $_dataAccess;

    public function __construct() {
        $this->_dataAccess = DataAccessFactory::getObjectOfDataAccess();
    }

    public function getCustomerName(int $id): string {
        return $this->_dataAccess->getCustomerName($id);
    }

}

//Application
$foo = new BusinessLogic();
echo $foo->getCustomerName(9);
