<?php

// 1. Open database connection
require('db.php');

$deleteid = $_GET['route_id'];

//2. Do a query
$query  = "DELETE FROM Bus_route ";
$query .= "WHERE route_id= $deleteid";

//echo $query;
    
$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}



//Echo "Staff deleted successfully, please return to the previous page and refresh!!!";



// 5. close db connection
mysqli_close($connection);


header('Location: Bus_route.php')

?>