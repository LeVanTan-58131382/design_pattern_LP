<?php
require_once "EmployeeComponent.php";
require_once "EmployeeConcreteComponent.php";
require_once "EmployeeDecorator.php";
require_once "TeamMember.php";
require_once "TeamLeader.php";

echo "<b>Employee</b>";echo "<br>";
$em1 = new EmployeeConcreteComponent();
echo $em1->doTask();echo "<br>";
echo $em1->join();echo "<br>";
echo $em1->terminate();echo "<br>";
echo "<br>";
echo "<b>Member</b>";echo "<br>";
$member = new TeamMember($em1);
echo $member->doTask();echo "<br>";
echo $member->join();echo "<br>";
echo $member->terminate();echo "<br>";
echo $member->performTask();echo "<br>";
echo $member->coordinateWithOther();
echo "<br>";
echo "<br>";
echo "<b>Leader</b>";echo "<br>";
$leader = new TeamLeader($em1);
echo $leader->doTask();echo "<br>";
echo $leader->join();echo "<br>";
echo $leader->terminate();echo "<br>";
echo $leader->planning();echo "<br>";
echo $leader->motivate();echo "<br>";
echo $leader->monitor();echo "<br>";


echo "<b>Member 2</b>";echo "<br>";
$member2 = new TeamMember($leader);
echo $member2->doTask();echo "<br>";
echo $member2->join();echo "<br>";
echo $member2->terminate();echo "<br>";

