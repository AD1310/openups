<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    
    <title>Registration</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="../public/css/registerlogin.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);      
        $location = stripslashes($_REQUEST['location']);
        $location = mysqli_real_escape_string($con, $location);
        $phonenum = stripslashes($_REQUEST['phonenum']);
        $phonenum = mysqli_real_escape_string($con, $phonenum);

        $create_datetime = date("Y-m-d H:i:s");
        $filename = $_FILES["userphoto"]["name"]; 
        $tempname = $_FILES["userphoto"]["tmp_name"];     
        $folder = "uploads/".$filename;
        move_uploaded_file($tempname, $folder);

        $query    = "INSERT into `users` (username, password, email, create_datetime,userphoto,location,phonenum)
        VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime', '$filename', '$location', '$phonenum')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>register</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" name="userName" placeholder="Full Name" onfocusout="validatename()" required />
        <span
        id="userName-info" class="info"></span>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="text" class="login-input" name="phonenum" placeholder="Phone Number">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="file" accept="image/png,image/jpeg,image/jpg" class="login-input" name="userphoto" placeholder="User Photo" required />
        <input type="text" class="login-input" name="location" placeholder="Location" required />
      

        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
