<?php
require_once("util-db.php");
require_once("model-students-by-house.php");
include "view-header.php";

$pageTitle = "Student By House";
$students = selectStudentsByHouse($_POST['hid']);
include "view-students-by-house.php";
include "view-footer.php";
?>
