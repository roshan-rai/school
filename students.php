<?php
require_once("util-db.php");
require_once("model-students.php");

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertStudent($_POST['sName'], $_POST['sClass'],$_POST['sHouse']))
      {
        echo '<div class="alert alert-success" role="alert"> Student successfully added!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
    case "Edit":
      if(updatePatients($_POST['pName'], $_POST['pDescription'], $_POST['pid']))
      {
        echo '<div class="alert alert-success" role="alert"> Patients successfully edited!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
        case "Delete":
      if (deletePatients($_POST['pid'])) 
      {
            echo '<div class="alert alert-success" role="alert"> Patient successfully deleted!</div>';
        } 
      else {
    echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }  
}
}

$students = selectStudents();
include "view-students.php";
?>
