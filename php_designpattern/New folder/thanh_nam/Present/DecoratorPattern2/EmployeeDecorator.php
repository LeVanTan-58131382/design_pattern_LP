<?php
abstract class EmployeeDecorator implements EmployeeComponent{

    protected $employee;

    public function __construct(EmployeeComponent $employee)
    {
        $this->employee = new $employee;
    }

    public function doTask()
    {
        return $this->employee->doTask();
    }

    public function join()
    {
        return $this->employee->join();
    }

    public function terminate()
    {
        return $this->employee->terminate();
    }


}