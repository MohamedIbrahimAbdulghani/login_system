<?php

// this function to check the input is required or not required
function validationRequired($input) {
    if(empty($input)):
        return true;
    else:
        return false;
    endif;
}


// this function to check the mineumm number
function validationMin($input, $min) {
    if(strlen($input) < $min):
        return true;
    else:
        return false;
    endif;
}

// this function to check the maxeumm number
function validationMax($input, $max) {
    if(strlen($input) > $max):
        return true;
    else:
        return false;
    endif;
}