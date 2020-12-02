<?php
require_once "StudentDao.php";
require_once "Student.php";
require_once "StudentDaoImpl.php";
$studentDao = new StudentDaoImpl();

foreach ($studentDao->getAllStudents() as $student => $value) {
    echo "Student: [RollNo : " . $value->getRollNo() . ", Name : "  . $value->getName() . " ]" . "<br>";
}

$student = $studentDao->getAllStudents()[0];
$student->setName("Beri");
$studentDao->updateStudent($student);

$studentDao->getStudent(0);
echo "Student: [RollNo : " . $student->getRollNo() . ", Name : "  . $student->getName() . " ]" . "<br>";

