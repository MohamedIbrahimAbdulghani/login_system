<?php
require_once "../core/functions.php";

if(checkRequestMethod("POST") && checkPostInput("name")):

    foreach($_POST as $key => $value):
        $$key = sanitizeInput($value);
        if($password = "password"):
            $password = hashedPassword($password);
        endif;
    endforeach;


else:
    echo "Sorry, Not Supported Method";
    header("refresh:1;url=../register.php");
endif;