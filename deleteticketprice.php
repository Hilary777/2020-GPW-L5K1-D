<?php

// 1. Open database connection
require('db.php');

$deleteid = $_GET['ticket_pid'];

//2. Do a query
$query  = "DELETE FROM Ticket_price ";
$query .= "WHERE ticket_pid = $deleteid";

//echo $query;
    
$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}



//Echo "Staff deleted successfully, please return to the previous page and refresh!!!";



// 5. close db connection
mysqli_close($connection);


header('Location: Ticket_price.php')

?>