<?php
include_once("../../database/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $youtube = $_POST['youtube'];
    $recordId = $_POST['record_id'];

    $logoFileName = $_FILES['logo']['name'];
    $logoTempName = $_FILES['logo']['tmp_name'];
    $logoPath = "../../uploads/logos/" . time() . "_" . $logoFileName;
    $logoPathStore = "uploads/logos/" . time() . "_" . $logoFileName;
    move_uploaded_file($logoTempName, $logoPath);

    $iconFileName = $_FILES['icon']['name'];
    $iconTempName = $_FILES['icon']['tmp_name'];
    $iconPath = "../../uploads/icons/" . time() . "_" . $iconFileName;
    $iconPathStore = "uploads/icons/" . time() . "_" . $iconFileName;
    move_uploaded_file($iconTempName, $iconPath);

    
    $sql = "UPDATE `setting` SET
            `name`='$name',
            `email`='$email',
            `mobile`='$mobile',
            `logo`='$logoPathStore',
            `icon`='$iconPathStore',
            `address`='$address',
            `facebook`='$facebook',
            `instagram`='$instagram',
            `twitter`='$twitter',
            `linkdhin`='$linkedin',
            `youtube`='$youtube'
            WHERE `id`='$recordId'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../setting.php?status=success");
        exit();
    } else {
        header("Location: ../setting.php?status=error");
        exit();
    }

    mysqli_close($conn);
}
?>
