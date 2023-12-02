<?php
function selectStudents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT student_id, student_name, student_class,house_name FROM `student` s join house h on h.house_id=s.house_id ");
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
function updateStudent($sName, $sClass, $sHouse, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `student`set `student_name`=?, `student_class` = ?, `house_id`=? where student_id=?");
        $stmt->bind_param("ssii", $sName, $sClass, $sHouse, $sid);
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
function selectHousesForInput(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT house_id, house_name FROM `house` order by house_name ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
