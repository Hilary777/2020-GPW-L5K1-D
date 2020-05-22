<?php

require('db.php');


// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}

$deleteid = $_GET['id'];

// 2. Do a query
$query  = "DELETE FROM User "; 
$query .= "WHERE id = $deleteid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

Echo "Information deleted";

// 5. close db connection
mysqli_close($connection);

?>