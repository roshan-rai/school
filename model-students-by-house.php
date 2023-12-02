<?php

function selectStudentsByHouse($hid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.student_name,s.student_id,s.student_class,h.house_name FROM `student` s join house h on s.house_id=h.house_id where s.house_id=?");
        $stmt->bind_param("i", $hid);
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
