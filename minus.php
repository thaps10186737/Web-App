<?php 
// Start the session to access session variables
session_start(); 

// Retrieve the item ID from the URL parameter
$id_item = $_GET['id']; 

// Check if the cart session variable is not empty
if (!empty($_SESSION['cart'])) {

    // Loop through each item in the cart session
    foreach ($_SESSION['cart'] as $index_item => $row) {

        // Check if the row is an array (to ensure it's a cart item)
        if (is_array($row)) {

            // Check if the current item matches the item ID to be modified
            if ($row['id'] == $id_item) {

                // Decrease the quantity of the item by 1
                $_SESSION['cart'][$index_item]['quantity'] -= 1;

                // If the quantity reaches 0, mark the item as removed
                if ($_SESSION['cart'][$index_item]['quantity'] == 0) {
                   // Placeholder name for removed item
                    $_SESSION['cart'][$index_item]['name'] = "nots_1"; 
                   // Placeholder ID for removed item
                    $_SESSION['cart'][$index_item]['id'] = 00000; 
                }
            }
        }
    }

    // Decrement the added count in the session (to track items removed)
    $_SESSION['added'] -= 1;
}

// Redirect the user to the cart page
echo "<script>window.location.href='cart.php';</script>";
