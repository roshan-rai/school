<?php
function selectHouses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT house_id, house_name, house_captain, house_color FROM `house` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}




function deleteHouseWithAwards($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Delete from house where house_id=? ");
        $stmt->bind_param("i", $tid);
        $stmt->execute();
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAwardWithHouse($tid, $did, $pid, $treatment_name, $sDate, $eDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `treatment` set `treatment_name`=?, `doctor_id` = ?,  `treatment_startdate` = ?, `treatment_enddate` = ? where treatment_id=?");
        $stmt->bind_param("sissi", $treatment_name, $did, $sDate, $eDate, $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

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
