<?php
require_once "Tree.php";

$MainBranch = new Tree("MainBranch","BranchMain");

$brach2_1 = new Tree("branch2.1","branchmain");
$brach2_2 = new Tree("branch2.2", "branchmain");

$brach2_1_1 = new Tree("branch2.1.1","branch1");
$brach2_1_2 = new Tree("branch2.1.2", "branch1");

$brach2_2_1 = new Tree("branch2.2.1","branch2");
$brach2_2_2 = new Tree("branch2.2.2", "branch2");


$MainBranch->add($brach2_1);
$MainBranch->add($brach2_2);

$brach2_1->add($brach2_1_1);
$brach2_1->add($brach2_1_2);

$brach2_2->add($brach2_2_1);
$brach2_2->add($brach2_2_2);

echo $MainBranch->toString();
echo "<br>";

foreach ($MainBranch->getResult() as $key => $value){
    echo "This is ". $value->getName();
    echo "<br>";
    foreach ($value->getResult() as $branch){
        echo $branch->toString();
        echo "<br>";

    }

}