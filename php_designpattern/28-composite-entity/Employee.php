<?php


class Employee
{
    private string $name;
    private string $dept;
    private int $salary;
    private array $subordinates = array();

    /**
     * Employee constructor.
     * @param string $name
     * @param string $dept
     * @param int $salary
     */
    public function __construct( string $name, string $dept, int $salary)
    {
        $this->name = $name;
        $this->dept = $dept;
        $this->salary = $salary;
    }


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
     * @return string
     */
    public function getDept(): string
    {
        return $this->dept;
    }

    /**
     * @param string $dept
     */
    public function setDept(string $dept): void
    {
        $this->dept = $dept;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getSubordinates() :array
    {
        return $this->subordinates;
    }

    public function add(Employee $employee): void
    {
        array_push($this->subordinates,$employee);
    }

    public function remove(Employee $employee2) :void
    {
        foreach ($this->subordinates as $key => $value )
        {
            if($value->getName() == $employee2->getName())
            {
                unset($this->subordinates[$key]);
            }
        }
    }

    public function toString() :string {
        return "Employee :[ Name : " . $this->name . ", dept : " . $this->dept . ", salary :" . $this->salary ." ]<br>";
//        return "Employee :[ Name : " . $this->name . ", dept : " . $this->dept . " ]<br>";

    }
}