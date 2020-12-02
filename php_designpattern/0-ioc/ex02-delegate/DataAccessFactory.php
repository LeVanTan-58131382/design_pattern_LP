<?php

class DataAccessFactory {

    public static function getObjectOfDataAccess(): DataAccess {
        return new DataAccess();
    }

}
