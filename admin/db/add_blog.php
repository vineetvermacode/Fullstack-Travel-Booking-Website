<?php
include_once("../../database/config.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $headline = mysqli_real_escape_string($conn, $_POST['headline']);
    $shotDesc = mysqli_real_escape_string($conn, $_POST['shot_desc']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $tag = mysqli_real_escape_string($conn, $_POST['tag']);
    $postBy = mysqli_real_escape_string($conn, $_POST['post_by']);
    $postDate = $_POST['post_date'];
    $postType = mysqli_real_escape_string($conn, $_POST['post_type']);

    $targetDir = "../../uploads/blog/"; 
    $blogImage = $targetDir . basename($_FILES['blog_image']['name']);
    $targetDirs = "uploads/blog/".basename($_FILES['blog_image']['name']);

    if (move_uploaded_file($_FILES['blog_image']['tmp_name'], $blogImage)) {
        $sql = "INSERT INTO blog_posts (blog_image, title, headline, shot_desc, description, tag, post_by, post_date, post_type, created_at) 
                VALUES ('$targetDirs', '$title', '$headline', '$shotDesc', '$description', '$tag', '$postBy', '$postDate', '$postType', '$postDate')";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                $response = array("success" => true, "message" => "Blog post added successfully!");
            } else {
                $response = array("success" => false, "message" => "Error adding blog post: " . mysqli_error($conn));
            }

            mysqli_stmt_close($stmt);
        } else {
            $response = array("success" => false, "message" => "Error in prepared statement: " . mysqli_error($conn));
        }

        mysqli_close($conn);
    } else {
        $response = array("success" => false, "message" => "Error moving blog image to the folder");
    }

    echo json_encode($response);
}
?>
