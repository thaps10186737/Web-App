<?php
session_start();

// Decode JSON body to get email and set in session
$data = json_decode(file_get_contents("php://input"), true);
if (isset($data['email'])) {
    $_SESSION['user_email'] = $data['email'];
}