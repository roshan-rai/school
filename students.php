<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.all.min.js"></script>

<?php
require_once("util-db.php");
require_once("model-students.php");

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertStudent($_POST['sName'], $_POST['sClass'],$_POST['sHouse']))
      {
        echo '<div class="alert alert-success" role="alert"> Student successfully added!</div>';
         echo '<script>';
        echo 'Swal.fire({';
        echo '  title: "Congratulations",';
        echo '  text: "Student added successfully",';
        echo '  icon: "success",';
        echo '});';
        echo '</script>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
    case "Edit":
      if(updateStudent($_POST['sName'], $_POST['sClass'],$_POST['sHouse'], $_POST['sid']))
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
                echo '<script>';
        echo 'Swal.fire({';
        echo '  title: "Success",';
        echo '  text: "Student deleted successfully",';
        echo '  icon: "success",';
        echo '});';
        echo '</script>';
        } 
      else {
    echo '<div class="alert alert-danger" role="alert"> Error</div>';
           echo '<script>';
        echo 'Swal.fire({';
        echo '  title: "Failed",';
        echo '  text: "Student deletion failed",';
        echo '  icon: "error",';
        echo '});';
        echo '</script>';
        }  
}
}

$students = selectStudents();
include "view-students.php";
?>
