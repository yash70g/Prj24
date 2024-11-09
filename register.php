<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "travelvista");

// Create database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS travelvista");
$conn->select_db("travelvista");

// Create table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50) UNIQUE,
    password VARCHAR(255)
)");

// Handle registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Registration failed!'); window.location.href = 'index.html';</script>";
    }
    $stmt->close();
}

$conn->close();
?>