<?php

session_start();

require_once "core/functions.php";


session_destroy();


session_unset();

redirect("register.php");

