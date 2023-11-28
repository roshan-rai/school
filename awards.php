<?php
require_once("util-db.php");
require_once("model-awards.php");

$pageTitle = "Awards";

$awards = selectAwards();
include "view-awards.php";
?>
