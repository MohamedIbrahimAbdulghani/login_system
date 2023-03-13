<?php

// this function to check the server method
function checkRequestMethod($method) {
    if($_SERVER["REQUEST_METHOD"] == "POST"):
        return true;
    else:
        return false;
    endif;
}

// this function to check the post of input 
function checkPostInput($input) {
    if(isset($_POST[$input])):
        return true;
    else:
        return false;
    endif;
}

// this function to sanitize the inputs
function sanitizeInput($input) {
    return trim(htmlspecialchars(htmlentities($input)));
}

// this function to hashed the password 
function hashedPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}