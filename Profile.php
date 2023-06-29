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
    $password = "Amburadul";
    $caffeine = $row['caffeine'];
    $seafood = $row['seafood'];
    $dairy = $row['dairy'];
    $egg = $row['egg'];
    $peanut = $row['peanut'];
    $Desc = '';
    if($caffeine == 1)
    {
        $Desc = $username . ' is Allergic with Caffeine. Therefore, it is need to be aware to not consuming products that contain caffeine. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        if($seafood == 1)
        {
            $Desc = $username . ' is Allergic with Caffeine, and Seafood. Therefore, it is need to be aware to not consuming products that contain caffeine and seafood. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
            if($dairy == 1)
            {
                $Desc = $username . ' is Allergic with Caffeine, Seafood, and Dairy. Therefore, it is need to be aware to not consuming products that contain caffeine, seafood, and dairy. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                if($egg == 1)
                {
                    $Desc = $username . ' is Allergic with Caffeine, Seafood, Dairy, and Egg. Therefore, it is need to be aware to not consuming products that contain caffeine, seafood, dairy and egg. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    if($peanut == 1)
                    {
                        $Desc = $username . ' is Allergic with Caffeine, Seafood, Dairy, Egg, and Peanut. Therefore, it is need to be aware to not consuming products that contain caffeine, seafood, dairy, egg and peanut. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    }
                }
            }
        }
    }
    else if($seafood == 1)
    {
        $Desc = $username . ' is Allergic with Seafood. Therefore, it is need to be aware to not consuming products that contain seafood. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        if($dairy == 1)
            {
                $Desc = $username . ' is Allergic with Seafood, and Dairy. Therefore, it is need to be aware to not consuming products that contain seafood, and dairy. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                if($egg == 1)
                {
                    $Desc = $username . ' is Allergic with Seafood, Dairy, and Egg. Therefore, it is need to be aware to not consuming products that contain seafood, dairy, and egg. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    if($peanut == 1)
                    {
                        $Desc = $username . ' is Allergic with Seafood, Dairy, Egg, and Peanut. Therefore, it is need to be aware to not consuming products that contain seafood, dairy, egg, and peanut. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    }
                }
            }
    }
    else if($dairy == 1)
    {
        $Desc  = $username . ' is Allergic with Dairy. Therefore, it is need to be aware to not consuming products that contain dairy. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        if($egg == 1)
                {
                    $Desc = $username . ' is Allergic with Dairy, and Egg. Therefore, it is need to be aware to not consuming products that contain dairy, and egg. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    if($peanut == 1)
                    {
                        $Desc = $username . ' is Allergic with Dairy, Egg, and Peanut. Therefore, it is need to be aware to not consuming products that contain dairy, egg and peanut. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    }
                }
    }
    else if($egg == 1)
    {
        $Desc = $username . ' is Allergic with Egg. Therefore, it is need to be aware to not consuming products that contain egg. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        if($peanut == 1)
        {
            $Desc = $username . ' is Allergic with Egg, and Peanut. Therefore, it is need to be aware to not consuming products that contain egg and peanut. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        }
    }
    else if($peanut == 1)
    {
        $Desc = $username . ' is Allergic with Peanut. Therefore, it is need to be aware to not consuming products that contain [eanut]. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
    }
    else{
        $Desc = $username . ' has no allergic. You can consume anything you want. However, it is needed to notice the product contain. Knowing the ingredients allows us to make informed decisions, steering clear of potential allergens or harmful substances that could have adverse effects on our bodies.';
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
                <p>Nama: <?php echo $username?></p>
                <p>Email: <?php echo $email?></p>
                <p>Password: <?php echo $password?></p>
            </div>
        </div>

        <div class="content2">
            <div class="h1-white content-title">Informasi Alergi User</div>
            <div class="paragraph_maven-pro content-paragraph"><?php echo $Desc ?></div>
        </div>
    </div>

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