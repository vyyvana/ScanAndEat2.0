<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login&Register-Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@600&family=Cormorant:wght@600&family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="awalan-screen">
        <h1 class="datang">Selamat Datang!</h1>
        <div class="vector-atas">
            <img class="vector-awalan" src="Assets/vector-awalan.png" alt="Vawalan">
            <p class="isi">Harap Melakukan Registrasi Atau Login Sebelum 
                    Melanjutkan Perjalanan Anda Dengan Scan & EAT
            </p>

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
                    <!-- <a href="index.html"><button class="button">Login</button></a> -->
                    <a href="index.html"><div class="button-green">Login</div></a>
                </div>

                <div class="Register">
                    <p>User Baru?</p>
                    <a href="Register.php">Register Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>