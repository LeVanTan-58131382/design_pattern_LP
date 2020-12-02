<?php


class StudentBO
{
    private $students = array();

    public function __construct()
    {
        $student1 = new StudentVO("Viet",0);
        $student2 = new StudentVO("Anh",1);

        array_push($this->students, $student1);
        array_push($this->students,$student2);
    }

    function getAllStudents()
    {
        // TODO: Implement getAllStudents() method.
        return $this->students;
    }

    function getStudent(int $rollNo)
    {
        // TODO: Implement getStudent() method.
        foreach ($this->students as $key => $student){
            if($student->getRollNo() == $rollNo)
            {
                return $student;
            }
        }
        return null;
    }

    function updateStudent(StudentVO $student)
    {

        // TODO: Implement updateStudent() method.

        foreach ($this->students as $key => $stu){
            if($stu->getRollNo() == $student->getRollNo())
            {
                $stu->setRollNo($student->getRollNo());
                $stu->setName($student->getName());
            }
        }
        echo "Student: Roll No " . $student->getRollNo() .", updated in the database <br>";
    }
}