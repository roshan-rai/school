<?php
require_once("util-db.php");
require_once("model-awards.php");

$pageTitle = "Awards";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertAwards($_POST['pName'], $_POST['pDescription']))
      {
        echo '<div class="alert alert-success" role="alert"> Awards successfully added!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
    case "Edit":
      if(updateAwards($_POST['pName'], $_POST['pDescription'], $_POST['pid']))
      {
        echo '<div class="alert alert-success" role="alert"> Awards successfully edited!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
        case "Delete":
      if (deleteAwards($_POST['pid'])) 
      {
            echo '<div class="alert alert-success" role="alert"> Patient successfully deleted!</div>';
        } 
      else {
    echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }  


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertCourse($_POST['pName'], $_POST['pDescription']);
      break;
    // Add more cases here if needed
  }
}

$awards = selectAwards();
include "view-awards.php";
include "view-footer.php";
?>
