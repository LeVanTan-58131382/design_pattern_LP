<?php

require_once './IDataAccess.php';

class DataAccess implements IDataAccess {

    public function __construct() {
        
    }

    // get it from DB in real app
    public function getCustomerName(int $id): string {
        return "Get customer name by id = {$id}";
    }

}
