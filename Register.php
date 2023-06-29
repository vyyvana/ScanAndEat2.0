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
            $email = mysqli_real_escape_string($con, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $caffeine = isset($_POST['Kafein']) ? 1 : 0;
            $seafood = isset($_POST['Seafood']) ? 1 : 0;
            $dairy = isset($_POST['Susu']) ? 1 : 0;
            $egg = isset($_POST['Telur']) ? 1 : 0;
            $peanut = isset($_POST['Kacang']) ? 1 : 0;
            $query = "INSERT into users (username, password, email, caffeine, seafood, dairy, egg, peanut) VALUES ('$username', '" . md5($password) . "', '$email', '$caffeine', '$seafood', '$dairy', '$egg', '$peanut')";
            $result = mysqli_query($con, $query);
            if($result){
                header("Location: Login.php");
                echo "<div class='form'>
                <h3>You are registered succesfully.</h3><br/>
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
            <input type="text" id="input" class="login-input" name="username" placeholder="Username" required>
        </div>
        <div class="input-box">
            <label>Email</label>
            <input type="email" id= "input" class="login-input" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <label>Password</label>
            <input type="password" id="input" class="login-input" name="password" placeholder="Password" required>
        </div>
        <div class="choice">
            <p>Pilih Alergi Anda</p>
            <div class="choice-container">
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox" class="form-control" name="Kafein" value="1" checked="<?php echo $isChecked?>"> <label class=textBox>Kafein</label>
                </div>
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox" class="form-control" name="Seafood" value="1" checked="<?php echo $isChecked?>"> <label class=textBox>Seafood</label>
                </div>
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox" class="form-control" name="Susu" value="1" checked="<?php echo $isChecked?>"> <label class=textBox>Susu</label>
                </div>
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox" class="form-control" name="Telur" value="1" checked="<?php echo $isChecked?>"> <label class=textBox>Telur</label>
                </div>
                <div class="choice-extra">
                    <input type="checkbox" id="checkbox" class="form-control" name="Kacang" value="1" checked="<?php echo $isChecked?>"> <label class=textBox>Kacang</label>
                </div>
            </div>
        </div>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="Login.php">Click to Login</a></p>
    </form>
</body>
</html>