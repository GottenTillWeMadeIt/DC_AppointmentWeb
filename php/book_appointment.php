<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST['fullName'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $stmt = $conn->prepare("INSERT INTO appointments 
        (full_name, contact, email, service, appointment_date, appointment_time) 
        VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $fullName, $contact, $email, $service, $date, $time);

 if ($stmt->execute()) {

    header("Location: ../appointment.php?success=1");
    exit();

} else {
    echo "Error: " . $stmt->error;
}

    $stmt->close();
    $conn->close();
}
?>

