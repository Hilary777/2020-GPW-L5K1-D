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
                header('location: index.html');
            } else if ($_SESSION['login_level'] == 2) {
                header('location: index.html');
            } else {
                header('location: index.html');
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
      <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">The Chengdu Bus Login System</h1>
                    <h2 class="h4 text-gray-900 mb-4">Welcome Back!</h2>
                  </div>
                    
  <title>Login</title>
                    
                    
                    
    <div id="login">
<form method="POST">
    <input type="text" required="required" name="username"class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter username..."> 
    <input type="password" required="required"name="password"class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
   
    <button tyep="submit" name="submit" value="Login" style="
padding:1px 10px;
border: 1px solid #FF4B2B2B;
Background-colcor:#FF4B2B2B;                                          
MARG-TOP:21PX  :       "> Login                                           </button>
    
    <button tyep="but" name="reset" value="Reset" style="
padding:1px 10px;
border: 1px solid #FF4B2B2B;
Background-colcor:#FF4B2B2B;                                          
MARG-TOP:11PX  :       "> Reset                                           </button>
</form>

               
                  <hr>
                  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

