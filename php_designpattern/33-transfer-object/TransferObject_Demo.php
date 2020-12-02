<?php
require_once "StudentBO.php";
require_once "StudentVO.php";
$studentBusinessObject = new StudentBO();

foreach ($studentBusinessObject->getAllStudents() as $student => $value) {
    echo "Student: [RollNo : " . $value->getRollNo() . ", Name : "  . $value->getName() . " ]" . "<br>";
}

$student = $studentBusinessObject->getAllStudents()[0];
$student->setName("Beri");
$studentBusinessObject->updateStudent($student);

$studentBusinessObject->getStudent(0);
echo "Student: [RollNo : " . $student->getRollNo() . ", Name : "  . $student->getName() . " ]" . "<br>";

?>