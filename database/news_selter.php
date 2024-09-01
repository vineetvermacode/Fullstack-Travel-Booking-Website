<?php
    include 'config.php';
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date('Y-m-d H:i:s');
    
    $email = $_POST['email'];
    
    $sql = "INSERT INTO news_selter_subscribers (email, date_time) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $timestamp);
    
    if (!$stmt->execute()) {
        $response = ["status" => "error", "message" => "Database Error: " . $stmt->error];
        http_response_code(500);
    } else {
        $response = ["status" => "success", "message" => "Thank you for subscribing to our newsletter. We appreciate your interest in staying updated with our news and updates."];
    }
    
    $stmt->close();
    $conn->close();

echo json_encode($response);
?>
