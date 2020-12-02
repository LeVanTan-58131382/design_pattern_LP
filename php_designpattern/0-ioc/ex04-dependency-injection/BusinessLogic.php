<?php

require_once './DataAccessFactory.php';
require_once './IDataAccess.php';

class BusinessLogic {

    private IDataAccess $_dataAccess;

    public function __construct(IDataAccess $dataAccess = null) {
        if (is_null($dataAccess)) {
            $this->_dataAccess = new DataAccess();
        } else {
            $this->_dataAccess = $dataAccess;
        }
    }

    public function getCustomerName(int $id): string {
        return $this->_dataAccess->getCustomerName($id);
    }

}

//Application
$foo = new BusinessLogic();
echo $foo->getCustomerName(9);
