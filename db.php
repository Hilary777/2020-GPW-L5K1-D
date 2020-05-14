<?php

// 1. Open database connection
$dbhost = "localhost";
$dbuser = "4eb07cbc4945";
$dbpass = "d4b0398d0e07a9b8";
$dbname = "l5k1d";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}