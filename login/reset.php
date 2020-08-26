<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Reset Password</title>
    <link rel="stylesheet" href="../public/css/registerlogin.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $query    = "SELECT * FROM `users` WHERE username='$email'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            echo "<div class='form'>
            <h3>Check OTP to set new password.</h3><br/>
           
            </div>";
            
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username.</h3><br/>
                  <p class='link'><a href='login.php'>Click here try again </a> </p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="reset">
        <h1 class="login-title">Reset Password</h1>
        <input type="text" class="login-input" name="email" placeholder="Enter registered phone number" autofocus="true"/>
        
        <input type="submit" value="Send OTP" name="submit" class="login-button"/>
       
  </form>
<?php
    }
?>
</body>
</html>
