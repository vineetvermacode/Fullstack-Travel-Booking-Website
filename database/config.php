<?php
$conn = mysqli_connect('localhost', 'root', '', 'gppv');
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>