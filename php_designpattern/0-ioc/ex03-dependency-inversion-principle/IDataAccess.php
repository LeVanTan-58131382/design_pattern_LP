<?php

interface IDataAccess
{
    public function getCustomerName(int $id) : string;
}