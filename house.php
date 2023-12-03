<?php
require_once("util-db.php");
require_once("model-house.php");

$pageTitle = "House";
$houses = selectHouses();
include "view-house.php";
?>
