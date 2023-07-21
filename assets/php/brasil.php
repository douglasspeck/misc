<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $brasil = file_get_contents("../assets/img/brasil.svg");

    echo $brasil;

?>