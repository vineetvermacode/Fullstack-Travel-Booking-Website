<?php
include 'config.php';
$from_page = $_POST['from_page'];
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$sql = "INSERT INTO `form_entries`( `from_page`, `name`, `email`, `number`, `message`) VALUES  ('$from_page','$name', '$email', '$number', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Your details are save! We will contact you sonn.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>