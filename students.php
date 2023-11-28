<?php
require_once("util-db.php");
require_once("model-students.php");

$students = selectStudents();
include "view-students.php";
?>
