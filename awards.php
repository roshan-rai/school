<?php
require_once("util-db.php");
require_once("model-awards.php");

$pageTitle = "Awards";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertAward($_POST['aName'],$_POST['sHouse']))
      {
        echo '<div class="alert alert-success" role="alert"> Award successfully added!</div>';
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
