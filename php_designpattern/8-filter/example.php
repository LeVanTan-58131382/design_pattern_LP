<?php
namespace Filter;
require_once("Person.php");
require_once("Criteria.php");
require_once("OrCriteria.php");
require_once("AndCriteria.php");
require_once("CriteriaFemale.php");
require_once("CriteriaMale.php");
require_once("CriteriaSingle.php");


$persons = [
new Person("Robert", "Male", "Single"),
new Person("John", "Male", "Married"),
new Person("Laura", "Female", "Married"),
new Person("Diana", "Female", "Single"),
new Person("Mike", "Male", "Single"),
new Person("Bobby", "Male", "Single")
];


$male = new CriteriaMale();
$female = new CriteriaFemale();
$single = new CriteriaSingle();
$singleMale = new AndCriteria($single, $male);
$singleOrFemale = new OrCriteria($single, $female);

echo "Males: ";
echo "<br>";
printPersons($male->meetCriteria($persons));
echo "<br>";

echo "Females: ";
echo "<br>";
printPersons($female->meetCriteria($persons));
echo "<br>";

echo "Single: ";
echo "<br>";
printPersons($single->meetCriteria($persons));
echo "<br>";

echo "Single Males: ";
echo "<br>";
printPersons($singleMale->meetCriteria($persons));
echo "<br>";

echo "Single Or Females: ";
echo "<br>";
printPersons($singleOrFemale->meetCriteria($persons));
echo "<br>";



function printPersons($persons)
{
foreach ($persons as $person) {
echo "Person : [ Name : " . $person->getName() . ", Gender : " . $person->getGender() . ", Marital Status : " .
$person->getMaritalStatus() . " ]";
echo "<br>";
}
}