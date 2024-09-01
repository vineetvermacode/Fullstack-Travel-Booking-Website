<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    date_default_timezone_set('Asia/Kolkata');
    $created_at = date('d-m-Y H:i:s');

    $sql = "INSERT INTO contact_us (name, email, mobile, query_type, message, created_at) 
            VALUES ('$name', '$email', '$number', '$subject', '$message', '$created_at')";

    if ($conn->query($sql) === TRUE) {
        $response = array("status" => "success", "message" => "Your enquiry saved successfully!  We will contact you soon. ");
    } else {
        $response = array("status" => "error", "message" => "Your enquiry not submited!  Please try again. ");
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
