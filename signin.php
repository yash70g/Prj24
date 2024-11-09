<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "travelvista");

$conn->select_db("travelvista");


// Handle login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Start a session and store user information if needed
            session_start();
            $_SESSION['email'] = $email; // You can store additional user info as needed

            // Redirect to a different page after successful login
            header("Location: login.html"); // Change 'dashboard.php' to your desired page
            exit(); // Make sure to exit after the redirect
        } else {
            echo "<script>alert('Invalid password!'); window.location.href = 'login.html';</script>";
        }
    } else {
        echo "<script>alert('No user found with this email!'); window.location.href = 'login.html';</script>";
    }
    $stmt->close();
}

$conn->close();
?>