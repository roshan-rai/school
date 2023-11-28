<?php
require_once("util-db.php");
require_once("model-awards.php");

$pageTitle = "Awards";
include "view-header.php";
$awards = selectAwards();
include "view-awards.php";
include "view-footer.php";
?>
