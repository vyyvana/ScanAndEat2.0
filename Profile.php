<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@600&family=Cormorant:ital,wght@0,100;1,600&family=Maven+Pro:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
    require('db.php');
    include("auth.php");
    $email = $_SESSION['email'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $caffeine = $row['caffeine'];
    $seafood = $row['seafood'];
    $dairy = $row['dairy'];
    $egg = $row['egg'];
    $peanut = $row['peanut'];
    $Desc = '';
    if($caffeine == 1)
    {
        $Desc = $username . ' alergi dengan kafein. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
        if($seafood == 1)
        {
            $Desc = $username . ' alergi dengan kafein dan makanan laut. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein dan makanan laut. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
            if($dairy == 1)
            {
                $Desc = $username . ' alergi dengan kafein, makanan laut dan susu. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein, makanan laut dan susu. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                if($egg == 1)
                {
                    $Desc = $username . ' alergi dengan kafein, makanan laut, susu dan telur. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein, makanan laut, susu dan telur. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                    if($peanut == 1)
                    {
                        $Desc = $username . ' alergi dengan kafein, makanan laut, susu, telur dan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein, makanan laut, susu, telur dan kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                    }
                }
            }
        }
        else if($dairy == 1)
        {
            $Desc = $username . ' alergi dengan kafein dan susu. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein dan susu. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
            if($egg == 1)
            {
                $Desc = $username . ' alergi dengan kafein, susu dan telur. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein, susu dan telur. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                if($peanut == 1)
                {
                    $Desc = $username . ' alergi dengan kafein, susu, telur dan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein, susu, telur dan kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                }
            }
        }
        else if($egg == 1)
            {
                $Desc = $username . ' alergi dengan kafein dan telur. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein dan telur. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                if($peanut == 1)
                {
                    $Desc = $username . ' alergi dengan kafein, telur dan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kafein, telur dan kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                }
            }
    }
    else if($seafood == 1)
    {
        $Desc = $username . ' alergi dengan makanan laut. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung makanan laut. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
        if($dairy == 1)
        {
            $Desc = $username . ' alergi dengan makanan laut dan susu. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung makanan laut dan susu. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
            if($egg == 1)
            {
                $Desc = $username . ' alergi dengan makanan laut, susu, dan telur. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandungmakanan laut, susu, dan telur. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                if($peanut == 1)
                {
                    $Desc = $username . ' alergi dengan makanan laut, susu, telur, kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung makanan laut, susu, telur, kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
                }
            }
        }
        else if($egg == 1)
        {
            $Desc = $username . ' alergi dengan makanan laut dan telur. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung makanan laut dan telur. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
            if($peanut == 1)
            {
                $Desc = $username . ' alergi dengan makanan laut, telur dan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung makanan laut, telur dan kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
            }
        }
        else if($peanut == 1)
        {
            $Desc = $username . ' alergi dengan makanan laut dan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung makanan laut dan kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
        }
    }
    else if($dairy == 1)
    {
        $Desc  = $username . ' alergi dengan susu. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung susu. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
        if($egg == 1)
        {
            $Desc = $username . ' alergi dengan susu dan telur. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung susu dan telur. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
            if($peanut == 1)
            {
                $Desc = $username . ' alergi dengan susu, telur, dan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung susu, telur, dan kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
            }
        }
        else if($peanut == 1)
        {
            $Desc = $username . ' alergi dengan susu dan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung susu dan kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
        }
    }
    else if($egg == 1)
    {
        $Desc = $username . ' alergi dengan telur. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung telur. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
        if($peanut == 1)
        {
            $Desc = $username . ' alergi dengan telur dan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung telur dan kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
        }
    }
    else if($peanut == 1)
    {
        $Desc = $username . ' alergi dengan kacang. Oleh karena itu perlu diwaspadai untuk tidak mengkonsumsi produk yang mengandung kacang. Jenis produk ini akan berdampak signifikan pada kesehatan Anda. Pendekatan sadar dan informasi untuk pemilihan produk adalah kunci untuk mempertahankan gaya hidup yang seimbang dan sehat.';
    }
    else{
        $Desc = $username . ' tidak memiliki alergi. Anda dapat mengkonsumsi apapun yang Anda inginkan. Namun perlu diperhatikan kandungan produknya. Mengetahui bahan-bahannya memungkinkan kita membuat keputusan berdasarkan informasi, menghindari alergen potensial atau zat berbahaya yang dapat berdampak buruk pada tubuh kita.';
    }
    ?>
    <div class="header_all">
        <div class="header_logo">
            <a href="index.html"><img src="img/SCAN & EAT.png" alt=""></a>
        </div>

        <ul>
            <a href="index.html"><li>Home</li></a>
            <a href="Scan.php"><li>Scan</li></a>
            <a href="About.html"><li>About</li></a>
            <a href="Profile.php"><li><img src="img/Profile.png" alt="">
            </li></a>
        </ul>

        <div class="background"></div>
    </div>

    <div class="profilePicture">
        <div class="h1-green title">Profile Page</div> 
        <img src="img/user.png" alt="">
        <div class="h2-green"><?php echo $username ?> Profile</div>
    </div>

    <div class="profile-Content">
        <div class="content1">
            <div class="h1-white content-title">Informasi Dasar User</div>
            <div class="paragraph_maven-pro content-paragraph">
                <p>Nama: <?php echo $username?></p><br>
                <p>Email: <?php echo $email?></p>
            </div>
        </div>

        <div class="content2">
            <div class="h1-white content-title">Informasi Alergi User</div>
            <div class="paragraph_maven-pro content-paragraph"><?php echo $Desc ?></div>
        </div>
    </div>
    <form action="" class="form">
        <div class="logout-box">
            <a href="logout.php" class ="logout">Logout</a>
        </div>
    </form>

    <div class="footer">
        <a href="index.html"><img class="footer_brandLogo" src="img/SCAN & EAT.png" alt=""></a>

        <a href="Scan.php">
            <div class="button-white-hollow">Scan Sekarang!</div>
        </a>

        
        <div class="footer_logos">
            <a href="whatsapp://send?text=Hello%20World!">
                <img src="img/whatsapp.png" alt="">
            </a>
    
            <a href="https://www.instagram.com/binusuniversityofficial/" target="_blank">
                <img src="img/instagram.png" alt="">
            </a>
    
            <a href="https://mail.google.com" target="_blank">
                <img src="img/email.png" alt="">
            </a>
        </div>
    </div>
</body>
</html>