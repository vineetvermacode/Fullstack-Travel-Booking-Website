<?php
include_once("../../database/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $location_name = $_POST["location_name"];
    $country = $_POST["country"];

    $sql = "INSERT INTO internal_exchange_location (location_name, country) VALUES ('$location_name', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Saved !');</script>";
        echo "<script>window.location.href = '../internal_exc_location.php';</script>";
    } else {
        echo "<script>alert('Not Save !');</script>";
        echo "<script>window.location.href = '../internal_exc_location.php';</script>";
    }
    $conn->close();
}
?>
