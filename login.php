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
        $query  = "SELECT username, password, level "; 
        $query .= "FROM login ";
        $query .= "WHERE username = '$username' AND password = '$password' ";

        // 2. Execute query
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("query is wrong");
        }

        // Save data to $row
        $row = mysqli_fetch_array($result);
        
        // Check how many answers did we get
        $numrows=mysqli_num_rows($result);
        if ($numrows == 1) {
            // Start to use sessions
            session_start();
            
            // Create session variables
            $_SESSION['login_user'] = $username;
            $_SESSION['login_level'] = $row['level'];
            
            if ($_SESSION['login_level'] == 1) {
                header('location: homepage.php');
            } else if ($_SESSION['login_level'] == 2) {
                header('location: depertment.php');
            } else {
                header('location: homepage.php');
            }
            
        } else {
            echo "Login failed";
        }
        
        // 4. free results
        mysqli_free_result($result);
    }
}

// 5. close db connection
mysqli_close($connection);

?>

<?php


if (isset($error)) {
    echo "<span>" . $error ."</span>";
}

?>

<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>The Chengdu Bus Company</title>  
     <body background="6666.jpg"></body>
    <link rel="stylesheet" type="text/css" href="login.css"/>  
</head>  
<body>  
    <div id="login"> 
        <h1>The Chengdu Bus Company Login System</h1> 
<form method="POST">
    <input type="text" required="required" name="username" placeholder="username"> <br/>
    <input type="password" required="required"name="password" placeholder="password"> <br/>
    <button tyep="submit" name="submit" value="Login" style="
padding:1px 10px;
border: 1px solid #FF4B2B2B;
Background-colcor:#FF4B2B2B;                                          
MARG-TOP:11PX  :       "> Login                                           </button>
    <button tyep="but" name="reset" value="Reset" style="
padding:1px 10px;
border: 1px solid #FF4B2B2B;
Background-colcor:#FF4B2B2B;                                          
MARG-TOP:11PX  :       "> Reset                                           </button>
</form>
