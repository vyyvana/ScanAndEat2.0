<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Profile-Style.css">
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
    $password = "Cipet";
    ?>
    <div class="header_all">
        <div class="header_logo">
            <a href="index.html"><img src="img/SCAN & EAT.png" alt=""></a>
        </div>

        <ul>
            <a href="index.html"><li>Home</li></a>
            <a href="Scan.html"><li>Scan</li></a>
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
                <p>Nama: <?php echo $username?></p>
                <p>Email: <?php echo $email?></p>
                <p>Password: <?php echo $password?></p>
            </div>
        </div>

        <div class="content2">
            <div class="h1-white content-title">Informasi Alergi User</div>
            <div class="paragraph_maven-pro content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quas iure quos vel illum voluptas? Magni iure vero perspiciatis deleniti rem repellendus ipsum velit. Accusamus eum assumenda quas recusandae animi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quas iure quos vel illum voluptas? Magni iure vero perspiciatis deleniti rem repellendus ipsum velit. Accusamus eum assumenda quas recusandae animi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quas iure quos vel illum voluptas? Magni iure vero perspiciatis deleniti rem repellendus ipsum velit. Accusamus eum assumenda quas recusandae animi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quas iure quos vel illum voluptas? Magni iure vero perspiciatis deleniti rem repellendus ipsum velit.</div>
        </div>
    </div>

    <div class="footer">
        <img class="footer_brandLogo" src="img/SCAN & EAT.png" alt="">

        <a href="Scan.html">
            <div class="button-white-hollow">Scan Sekarang!</div>
        </a>

        
        <div class="footer_logos">
            <a href="">
                <img src="img/whatsapp.png" alt="">
            </a>
    
            <a href="">
                <img src="img/instagram.png" alt="">
            </a>
    
            <a href="">
                <img src="img/email.png" alt="">
            </a>
        </div>
    </div>
</body>
</html>