<?php

require_once './DataAccess.php';

class DataAccessFactory {

    public static function getObjectOfDataAccess(): IDataAccess {
        return new DataAccess();
    }

}
