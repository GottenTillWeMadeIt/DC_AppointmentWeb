<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $message = $_POST['message'];

    // Handle Resume Upload
    $resumeName = $_FILES['resume']['name'];
    $resumeTmp = $_FILES['resume']['tmp_name'];
    $uploadDir = "../uploads/";

    // Create uploads folder if not exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $resumePath = $uploadDir . time() . "_" . basename($resumeName);
    move_uploaded_file($resumeTmp, $resumePath);

    // Save to database
    $stmt = $conn->prepare("INSERT INTO careers (full_name, email, phone, position, message, resume_file) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fullName, $email, $phone, $position, $message, $resumePath);

    if ($stmt->execute()) {
        header("Location: ../careers.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>