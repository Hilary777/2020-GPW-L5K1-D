<?php

require ('db.php');
    

if ($_POST['submit']) {
    $user_id = $_POST['id'];
    $user_name = $_POST['name'];
    $payway = $_POST['payway'];
  
    // 2. Do a query
    $query  = "INSERT INTO User (id, name, payway) "; 
    $query .= "VALUES ('$user_id, '$user_name', '$payway') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="Adduser.php" method="post">
    user_id:<input type="text" name="id"> <br/>
    user_name:<input type="text" name="name"> <br/>
    payway:<input type="text" name="payway"> <br/>
    <input type="submit" name="submit">
</form>