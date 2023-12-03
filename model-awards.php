
<?php
function selectAwards() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT award_id,award_name,h.house_id,house_name FROM `award` a join house h on h.house_id=a.house_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertAward($aName $sHouse) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `award` (`award_name`, `house_id`) VALUES (?,?)");
        $stmt->bind_param("si", $aName, $sHouse);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
