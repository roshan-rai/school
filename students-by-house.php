<?php
require_once("util-db.php");
require_once("model-students-by-house.php");

$pageTitle = "Student By House";
$students = selectStudentsByHouse($_POST['hid']);
include "view-students-by-house.php";
?>
