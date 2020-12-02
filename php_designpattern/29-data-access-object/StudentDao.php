<?php


interface StudentDao
{
    function getAllStudents();
    function getStudent(int $rollNo);
    function updateStudent(Student $student);
    function deleteStudent(Student $student);
}