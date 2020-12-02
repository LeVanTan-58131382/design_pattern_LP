<?php
namespace MVC;

require_once("StudentView.php");
require_once("Student.php");
require_once("StudentController.php");




$model = retriveStudentFromDatabase();
//Create a view : to write student details on console
$view = new StudentView();
$controller = new StudentController($model, $view);
$controller->updateView();
//update model data
$controller->setStudentName("John");
$controller->updateView();

function retriveStudentFromDatabase(): Student
{
    $student = new Student();
    $student->setName("Robert");
    $student->setRollNo("10");
    return $student;
}
?>