<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44','roshanou_schooluser', 'MIS4013-001', 'roshanou_school');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
