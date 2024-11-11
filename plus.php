<?php 
session_start(); // Start the session to access session variables

$id_item = $_GET['id']; // Retrieve the item ID from the URL parameter

// Check if the cart session variable is not empty
if (!empty($_SESSION['cart'])) {

    // Loop through each item in the cart session
    foreach ($_SESSION['cart'] as $index_item => $row) {

        // Check if the row is an array (to ensure it's a cart item)
        if (is_array($row)) {

            // Check if the item has already been added to the cart
            if ($row['id'] == $id_item) {

                // Increase the quantity of the item by 1
                $_SESSION['cart'][$index_item]['quantity'] += 1;
            }
        }
    }

    
}

// Increment the added count in the session (to track items added)
$_SESSION['added'] += 1;

// Redirect the user to the cart page
echo "<script>window.location.href='cart.php';</script>";
?>
