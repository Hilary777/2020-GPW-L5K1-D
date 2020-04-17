<?php

// make db conection
require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else { 
        // Save username & password in a variable
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 2. Prepare query
        $query  = "SELECT username, password "; 
        $query .= "FROM Users ";
        $query .= "WHERE username = '$username' AND password = '$password' ";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

        
$row = mysqli_fetch_array($result);
$numrows=mysqli_num_rows($result);
if ($numrows == 1) {

    session_start();
    
    $_SESSION['login_user'] = $username;
    
    

    
        if  ($_SESSION['login_level'] == 1) {
                    header('location: homepage.php');
                 else {
                    header('location:loginfailed.php');
            }
    
        } else {
            header('location:loginfailed.php');
        }

mysqli_free_result($result);
    }
}

mysqli_close($connection);
?>


<?php


if (isset($error)) {
    echo "<span>" . $error ."</span>";
}

?>
<div><h1 style="
    font-family:  sans-serif;
    text-align:  center;
    color: purple;">
   Chengdu traffic route management login system</h1></div>

    <form action="login.php" method="POST" style="margin-left:  auto;margin-right:  auto;padding-right:  15px;padding-left: 15PX;width: 50%;/* padding-top: 10%; */TEXT-ALIGN:  CENTER;     border-style: solid; background=
    padding-top: 5%;
    padding-bottom: 5%;
        border-color: black;">
    <label style="
    text-align:  center;
">Username:</label>
    <input type="text" name="username" placeholder="username"> <br>
    <label>Password:</label> 
    <input type="password" name="password" placeholder="password"> <br>
        <p>forget your password?</p>
    <button input="" type="submit" name="submit" value="Login" style="
    padding: 1px 15px;
    border: 1px solid #FF4B2B;
    BACKGROUND-COLOR: #FF2B2B;
                                                                      MARGIN-TOP:  11PX;">Login</button>
                                                                      


