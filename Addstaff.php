<?php

require ('db.php');
    

if ($_POST['submit']) {
    $staff_name = $_POST['staff_name'];
    $age = $_POST['age'];
    $position = $_POST['position'];
    // 2. Do a query
    $query  = "INSERT INTO Staff (staff_name, age, position) "; 
    $query .= "VALUES ('$staff_name', '$age', '$position') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="Addstaff.php" method="post">
    staff_name:<input type="text" name="staff_name"> <br/>
    age:<input type="text" name="age"> <br/>
    posotion:<input type="text" name="position"> <br/>
    <input type="submit" name="submit">
</form>