<?php
session_start(); // Start the session
session_destroy(); // Destroy all session variables
header("Location: index.html"); // Redirect to the homepage or login page
exit();
?>