<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']); 
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM users WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            header("Location: Profile.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Email/password.</h3><br/>
                  <p class='link'>Click here to <a href='Login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="awalan-screen">
        <h1 class="datang">Selamat Datang!</h1>
        <div class="vector-atas">
            <img class="vector-awalan" src="Assets/vector-awalan.png" alt="Vawalan">
            <p class="isi">Harap Melakukan Registrasi Atau Login Sebelum Melanjutkan Perjalanan Anda Dengan Scan & EAT
            </p>
    <form class="form" method="post" name="login">
        <div class="login">
            <h1 class="login-title">Login</h1>
                <div class="InputBox">
                    <h3 class="judulBox">Email</h3>
                    <input type="email" class="login-input" name="email" placeholder="Email" autofocus="true" required/>
                </div>
                <div class="InputBox">
                    <h3 class="judulBox">Password</h3>
                    <input type="password" class="login-input" name="password" placeholder="Password" required/>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="keep" name="keep" checked>
                    <label for="keep">Keep me signed in</label>
                </div>
                <input type="submit" value="Login" name="submit" class="login-button"/>
                <div class="Register">
                        <p>User Baru?</p>
                        <a href="Register.php">Register Sekarang</a>
                </div>
        </div>
        
  </form>
</div>
<?php
    }
?>
</body>
</html>