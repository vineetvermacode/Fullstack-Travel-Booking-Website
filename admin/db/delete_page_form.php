<?php
include_once("../../database/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recordId = mysqli_real_escape_string($conn, $_POST['recordId']);

    // Perform the deletion
    $deleteSql = "DELETE FROM form_entries WHERE id = '$recordId'";
    if ($conn->query($deleteSql) === TRUE) {
        $response = array("status" => "success", "message" => "Record deleted successfully");
    } else {
        $response = array("status" => "error", "message" => "Error deleting record: " . $conn->error);
    }

    // Return the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
