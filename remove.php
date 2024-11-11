<?php
include "connect.php"; // Make sure this file connects to your database

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    // Get the 'id' from the URL and sanitize it
    $id = intval($_GET['id']); // Using intval for basic sanitization

    // Prepare the delete query
    $query = "DELETE FROM `contact_tbl` WHERE `id` = $id";

    // Execute the query
    $execute = mysqli_query($connects, $query);

    if ($execute) {
        // Redirect back to the page with the table, or display a success message
        echo "<script type='text/javascript'>
        alert('Record deleted successfully.');
        window.location.href = 'admin_side.php'; // Replace with the page you want to return to
        </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Error: Could not delete record.');
        window.location.href = 'admin_side.php'; // Redirect back even if there's an error
        </script>";
    }
} else {
    // If 'id' is not set in the URL, redirect back to the table page
    echo "<script type='text/javascript'>
    alert('No record selected for deletion.');
    window.location.href = 'admin_side.php'; // Replace with the page you want to return to
    </script>";
}
?>
