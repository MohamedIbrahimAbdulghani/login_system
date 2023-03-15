<?php
session_start();
require_once "../core/functions.php";
require_once "../core/validations.php";



if(checkRequestMethod("POST") && checkPostInput("name")):

    foreach($_POST as $key => $value):
        $$key = sanitizeInput($value);
    endforeach;

    // Start Validation
    $errors_list = [];


    // to valid name
    if(validationRequired($name)):
        $errors_list[] = "name is required";
    elseif(validationMin($name, 3)):
        $errors_list[] = "name must be greater than 3 letters";
    elseif(validationMax($name, 30)):
        $errors_list[] = "name must be smaller than 30 letters";
    endif;


    // to valid email
    if(validationRequired($email)):
        $errors_list[] = "email is required";
    elseif(!validationEmail($email)):
        $errors_list[] = "Please type a valid email";
    endif;

    
    // to valid password
    if(validationRequired($password)):
        $errors_list[] = "password is required";
    elseif(validationMin($password, 6)):
        $errors_list[] = "password must be greater than 6 letters";
    elseif(validationMax($password, 20)):
        $errors_list[] = "password must be smaller than 20 letters";
    endif;
    

    if(empty($errors_list)):
        $users_file = fopen("../data/users.csv", "a+");
        $data = [$name, $email, $password];
        fputcsv($users_file, $data);
        $_SESSION["auth"] = [$name, $email];
        redirect("../index.php");
    else:
        $_SESSION["errors"] = $errors_list;
        redirect("../register.php");
    endif;
    
    // End Validation

else:
    echo "Sorry, Not Supported Method";
    header("refresh:1;url=../register.php");
endif;