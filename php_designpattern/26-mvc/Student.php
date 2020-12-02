<?php

namespace MVC;

class Student
{
    private string $rollNo;
    private string $name;

    public function getRollNo(): string
    {
        return $this->rollNo;
    }

    public function setRollNo(string $rollNo)
    {
        $this->rollNo = $rollNo;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}