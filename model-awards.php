
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
?>
