<?php
session_start();
require_once "../core/functions.php";
require_once "../core/validations.php";



if(checkRequestMethod("POST") && checkPostInput("name")):

    foreach($_POST as $key => $value):
        $$key = sanitizeInput($value);
        if($password = "password"):
            $password = hashedPassword($password);
        endif;
    endforeach;

    // Start Validation
    $errors_list = [];

    if(validationRequired($name)):
        $errors_list[] = "name is required";
    elseif(validationMin($name, 3)):
        $errors_list[] = "name must be greater than 3 letters";
    elseif(validationMax($name, 25)):
        $errors_list[] = "name must be smaller than 25 letters";
    endif;

    if(empty($errors_list)):
        echo "Done Don't Found Any Errors ";
    else:
        $_SESSION["errors"] = $errors_list;
        header("Location: ../register.php");
    endif;
    
    // End Validation

else:
    echo "Sorry, Not Supported Method";
    header("refresh:1;url=../register.php");
endif;