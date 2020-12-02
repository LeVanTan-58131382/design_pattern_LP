<?php


class Student
{
    private string $name;
    private int $rollNo;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getRollNo(): int
    {
        return $this->rollNo;
    }

    /**
     * @param int $rollNo
     */
    public function setRollNo(int $rollNo): void
    {
        $this->rollNo = $rollNo;
    }

    public function __construct(String $nameIn, int $rollNoIn)
    {
        $this->name = $nameIn;
        $this->rollNo = $rollNoIn;
    }


}