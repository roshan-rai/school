<?php
require_once("util-db.php");
require_once("model-students-with-awards.php");

$pageTitle = "Students";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
        if(insertDoctorWithAwards( $_POST['did'], $_POST['pid'], $_POST['treatment_name'], $_POST['sDate'], $_POST['eDate']) )
      {
        echo '<div class="alert alert-success" role="alert"> Information successfully added!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error in Adding!</div>';
      }
      break;
    case "Edit":
        if( updateStudentWithAwards($_POST['tid'], $_POST['did'], $_POST['pid'], $_POST['treatment_name'], $_POST['sDate'], $_POST['eDate']))
      {
        echo '<div class="alert alert-success" role="alert"> Information successfully edited!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
        case "Delete":
      if (deleteStudentWithAwards($_POST['tid'])) 
      {
            echo '<div class="alert alert-success" role="alert"> Treatment successfully deleted!</div>';
        } 
      else {
    echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }  
  }
}
$students = selectStudents();

include "view-students-with-awards.php";
include "view-footer.php";
?>
