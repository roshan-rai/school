<?php
require_once("util-db.php");
require_once("model-house.php");

$pageTitle = "House";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(selectStudentsByHouse($_POST['hid']))
      {
        echo '<div class="alert alert-success" role="alert"> Student successfully displayed!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;  
}
}
$houses = selectHouses();
include "view-house.php";
?>
