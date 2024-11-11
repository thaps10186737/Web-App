<?php
session_start();

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Retrieve item details from GET parameters
$item_id = $_GET['item_id'];
$item_name = $_GET['item_name'];
$item_image = $_GET['item_image'];
$item_price = $_GET['item_price'];

// Check if the item already exists in the cart
$found = false;

foreach ($_SESSION['cart'] as &$cart_item) {
    if ($cart_item['id'] == $item_id) {

        // Increment quantity if item exists
        $cart_item['quantity'] += 1; 

        $found = true;

        break;
    }
}

// Add the item as a new entry if it’s not already in the cart
if (!$found) {
    $_SESSION['cart'][] = [
        "id" => $item_id,
        "name" => $item_name,
        "image" => $item_image,
        "price" => $item_price,
        "quantity" => 1
    ];
}



