<?php
function selectStudents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT student_id, student_name, student_class FROM `student` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertStudent($sName, $sClass, $sHouse) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `student` (`student_name`, `student_class`, `house_id`) VALUES (?,?,?)");
        $stmt->bind_param("ssi", $sName, $sClass, $sHouse);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteStudent($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from student where student_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
