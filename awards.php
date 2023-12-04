<?php
require_once("util-db.php");
require_once("model-awards.php");

$pageTitle = "Awards";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "AddAward":
      if(insertAward($_POST['aName'],$_POST['sHouse']))
      {
        echo '<div class="alert alert-success" role="alert"> Award successfully added!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;  
    case "EditAward":
      if(updateAward($_POST['aName'],$_POST['sHouse'],$_POST['aid']))
      {
        echo '<div class="alert alert-success" role="alert"> Award successfully edited!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;  
}
}


$awards = selectAwards();
include "view-awards.php";
?>
