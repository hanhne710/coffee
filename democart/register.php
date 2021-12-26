<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    session_start();
    require('config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $name    = stripslashes($_REQUEST['name']);
        $name    = mysqli_real_escape_string($conn, $name);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $matk=mysqli_insert_id($conn);
        $query    = "INSERT INTO `khachhang`(`matk`, `Username`, `tenkh`, `pass`, `TinhTrang`, `Quyen`) VALUES ('$matk','$username','$name','$password','1','0')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  </div>";
                  $_SESSION['dangky']=$username;
                  $_SESSION['matk']=mysqli_insert_id($conn);
                  header('Location:cart.php');
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="name" placeholder="Fullname">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="dangky" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>