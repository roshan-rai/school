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
      if(updateStudent($_POST['sName'], $_POST['sClass'],$_POST['sHouse'] $_POST['sid']))
      {
        echo '<div class="alert alert-success" role="alert"> Student successfully edited!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
        case "Delete":
      if (deleteStudent($_POST['sid'])) 
      {
            echo '<div class="alert alert-success" role="alert"> Student successfully deleted!</div>';
        } 
      else {
    echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }  
}
}

$students = selectStudents();
include "view-students.php";
?>
