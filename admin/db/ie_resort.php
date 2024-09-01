<?php
include_once("../../database/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location_name = $_POST["location_name"];
    $type = $_POST["type"];
    $resort_name = $_POST["resort_name"];
    $free_wifi = isset($_POST["free_wifi"]) ? 1 : 0;
    $reservation = isset($_POST["reservation"]) ? 1 : 0;
    $credit_card = isset($_POST["credit_card"]) ? 1 : 0;
    $air_conditioner = isset($_POST["air_conditioner"]) ? 1 : 0;
    $car_parking = isset($_POST["car_parking"]) ? 1 : 0;
    $swimming_pool = isset($_POST["swimming_pool"]) ? 1 : 0;
    $overview = $_POST["overview"];

    $targetFolder = "../../uploads/ie_resort/";
    $image_url = $targetFolder . basename($_FILES["image_url"]["name"]);
    $image_path = "uploads/ie_resort/" . basename($_FILES["image_url"]["name"]);

    if (move_uploaded_file($_FILES["image_url"]["tmp_name"], $image_url)) {
        $stmt = $conn->prepare("INSERT INTO internal_exc_resort (location_name, type, resort_name, image_url, free_wifi, reservation, credit_card, air_conditioner, car_parking, swimming_pool, overview)
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssiiiiiss", $location_name, $type, $resort_name, $image_path, $free_wifi, $reservation, $credit_card, $air_conditioner, $car_parking, $swimming_pool, $overview);

        if ($stmt->execute()) {
            echo "<script>alert('Saved!');</script>";
            echo "<script>window.location.href = '../all_internal_exc_resort.php';</script>";
        } else {
            echo "<script>alert('Not Saved!');</script>";
            echo "<script>window.location.href = '../add_internal_exc_resort.php';</script>";
        }

        $stmt->close();
    } else {
        echo "File upload failed.";
    }
}
?>
