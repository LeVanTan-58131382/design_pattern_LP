<?php
class EmployeeConcreteComponent implements EmployeeComponent{

    public function doTask()
    {
        return "Employee do task";
    }

    public function join()
    {
        return "Day join task";
    }

    public function terminate()
    {
        return "done all task";
    }
}