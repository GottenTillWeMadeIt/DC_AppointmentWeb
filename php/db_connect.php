<?php
$conn = new mysqli("localhost", "root", "", "dental_clinic");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>