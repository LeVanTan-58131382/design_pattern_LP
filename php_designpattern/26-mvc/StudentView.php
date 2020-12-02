<?php

namespace MVC;

class StudentView
{
    public function printStudentDetails(string $studentName, string $studentRollNo)
    {
        echo "<br>";
        echo "Student: " . "<br>";
        echo "Name: " . $studentName . "<br>";
        echo "Roll No: " . $studentRollNo . "<br>";
    }
}