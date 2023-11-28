<?php
function selectStudents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id, doctor_name, doctor_area FROM `doctor` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPatientsByDoctor($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT treatment_id,d.doctor_name, t.doctor_id, p.patient_id, patient_name, patient_description, treatment_name, treatment_startdate, treatment_enddate FROM patient p JOIN treatment t ON t.patient_id = p.patient_id JOIN doctor d on d.doctor_id=t.doctor_id WHERE t.doctor_id = ?;");
        $stmt->bind_param("i", $did);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function selectStudentsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT student_id, student_name FROM `student` order by student_name ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function selectAwardForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT award_id, award_name FROM `award` order by award_name ");
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

function insertDoctorWithPatients( $did, $pid, $treatment_name, $sDate, $eDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `treatment` ( `doctor_id`, `patient_id`, `treatment_name`, `treatment_startdate`, `treatment_enddate`) VALUES (?, ?, ?, ?, ?);");
        $stmt->bind_param("iisss",  $did, $pid,$treatment_name, $sDate, $eDate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        console.log("error",$e);
        $conn->close();
        throw $e;
    }
}

?>
