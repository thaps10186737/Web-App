<!-- logout.php -->
<?php
session_start();  // Start the session

if (isset($_POST['logout'])) {  // Check if the logout button was clicked
    session_destroy();  // Destroy the session
    echo "<script>alert('You have logged out!'); window.location.href = 'index.php';</script>";  // Redirect to home or login page
}
?>
