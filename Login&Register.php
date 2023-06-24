<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login&Register-Style.css">
</head>
<body>
    <?php
        require('db.php');
        session_start();
        if (isset($_POST['username'])){
            $username = stripslashes($_REQUEST['username']);    // removes backslashes
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            // Check user is exist in the database
            $query    = "SELECT * FROM `users` WHERE username='$username'
                         AND password='" . md5($password) . "'";
            $result = mysqli_query($con, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['username'] = $username;
                header("Location: index.html");
            } else {
                echo "<div class='form'>
                      <h3>Incorrect Username/password.</h3><br/>
                      <p class='link'>Click here to <a href='Login&Register.php'>Login</a> again.</p>
                      </div>";
            }
        } else 
        {                                           
    ?>
    <div class="awalan-screen">
        <h1 class="datang">Selamat Datang!</h1>
        <div class="vector-atas">
            <img class="vector-awalan" src="Assets/vector-awalan.png" alt="Vawalan">
            <p class="isi">Harap Melakukan Registrasi Atau Login Sebelum 
                    Melanjutkan Perjalanan Anda Dengan Scan & EAT
            </p>
            <div class="form" method="post" name="login">
                <div class="login">
                    <div class="InputBox">
                        <h3 class="judulBox">Email</h3>
                        <input type="text">
                    </div>
                    <div class="InputBox">
                        <h3 class="judulBox">Password</h3>
                        <input type="password">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="keep" name="keep" checked>
                        <label for="keep">Keep me signed in</label>
                    </div>
                    <div class="button1">
                        <a href="index.html"><button class="btn">Login</button></a>
                    </div>

                    <div class="Register">
                        <p>User Baru?</p>
                        <a href="Register.php">Register Sekarang</a>
                    </div>
                </div>
            <div>
        </div>
    </div>
    <?php
    }
?>
</body>
</html>