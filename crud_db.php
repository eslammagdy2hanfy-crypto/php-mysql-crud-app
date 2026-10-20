<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    define("HOSTNAME","sql306.infinityfree.com");
    define("USERNAME","if0_43229561");
    define("PASSWORD","Eslam351");
    define("DATABASE","if0_43229561_data_students");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$connection){
        die("Connection Failed");
    }

?>