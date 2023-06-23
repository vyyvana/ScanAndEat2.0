<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="register-style.css">
</head>
<body>
    <h1>Registrasi Member</h1>
    <?php
        require('db.php');
        if(isset($_REQUEST['username'])){
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con, $username);
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $username);
            $query = "INSERT into 'users'(username, passowrd, email) VALUES ('$username', '" . md5($password) . "', '$email')";
            $result = mysqli_query($con, $query);
            if($result){
                echo "<div class='form'>
                    <h3>You are registered succesfully.</h3><br/>
                    <p class='link'>Click here to <a href='Login&Register.php>login</a></p>
                    </div>";
            } else{
                echo "<div class='form'
                <h3>Required fields are missing.</h3><br/>
                <p class='link'>Click here to <a href=Register.php>Regis</a></p>
                </div>";
            }
        }

    ?>
    <form class="form" action="" method="post">
        <div class="input-box">
            <label>Nama</label>
            <input type="text" id="input" class="login-input" name="username" required>
        </div>
        <div class="input-box">
            <label>Email</label>
            <input type="email" id= "input" class="login-input" name="email">
        </div>
        <div class="input-box">
            <label>Password</label>
            <input type="password" id="input" class="login-input" name="password">
        </div>
        <div class="choice">
            <p>Pilih Alergi Anda</p>
            <div class="choice-container">
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox" name=> <label class=textBox>Kafein</label>
                </div>
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox"> <label class=textBox>Seafood</label>
                </div>
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox"> <label class=textBox>Susu</label>
                </div>
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox"> <label class=textBox>Telur</label>
                </div>
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox"> <label class=textBox>Kacang</label>
                </div>
            </div>
        </div>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="Login&Register.php">Click to Login</a></p>
    </form>
</body>
</html>