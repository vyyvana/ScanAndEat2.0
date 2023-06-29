<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ProductInfo-Style.css">
    <title>Document</title>
</head>
<body>
    <?php
    require('db.php');
    include("auth.php");
    $bpom = $_SESSION['bpom'];
    $query = "SELECT * FROM produk WHERE bpom = '$bpom'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $nama = $row['nama'];
    $serving = $row['serving'];
    $energy = $row['energy'];
    $lemak = $row['lemak'];
    $lemakjenuh = $row['lemakjenuh'];
    $protein = $row['protein'];
    $karbo = $row['karbo'];
    $gula = $row['gula'];
    $garam = $row['garam'];
    $caffeine = $row['caffeine'];
    $seafood = $row['seafood'];
    $dairy = $row['dairy'];
    $egg = $row['egg'];
    $peanut = $row['peanut'];
    $image = $row['image'];
    $des1 = $row['des1'];
    $des2 = $row['des2'];

    $email = $_SESSION['email'];
    $queryuser = "SELECT * FROM users WHERE email = '$email'";
    $resuser = mysqli_query($con, $queryuser);
    $rowuser = mysqli_fetch_assoc($resuser);
    $user_kafein = $rowuser['caffeine'];
    $user_seafood = $rowuser['seafood'];
    $user_dairy = $rowuser['dairy'];
    $user_egg = $rowuser['egg'];
    $user_peanut = $rowuser['peanut'];
    $username = $rowuser['username'];
    $Desc = '';
    if($user_kafein == 1)
    {
        $Desc = $username . ' is Allergic with Caffeine. Therefore, it is need to be aware to not consuming products that contain caffeine. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        if($user_seafood == 1)
        {
            $Desc = $username . ' is Allergic with Caffeine, and Seafood. Therefore, it is need to be aware to not consuming products that contain caffeine and seafood. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
            if($user_dairy == 1)
            {
                $Desc = $username . ' is Allergic with Caffeine, Seafood, and Dairy. Therefore, it is need to be aware to not consuming products that contain caffeine, seafood, and dairy. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                if($user_egg == 1)
                {
                    $Desc = $username . ' is Allergic with Caffeine, Seafood, Dairy, and Egg. Therefore, it is need to be aware to not consuming products that contain caffeine, seafood, dairy and egg. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    if($user_peanut == 1)
                    {
                        $Desc = $username . ' is Allergic with Caffeine, Seafood, Dairy, Egg, and Peanut. Therefore, it is need to be aware to not consuming products that contain caffeine, seafood, dairy, egg and peanut. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    }
                }
            }
        }
    }
    else if($user_seafood == 1)
    {
        $Desc = $username . ' is Allergic with Seafood. Therefore, it is need to be aware to not consuming products that contain seafood. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        if($user_dairy == 1)
            {
                $Desc = $username . ' is Allergic with Seafood, and Dairy. Therefore, it is need to be aware to not consuming products that contain seafood, and dairy. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                if($user_egg == 1)
                {
                    $Desc = $username . ' is Allergic with Seafood, Dairy, and Egg. Therefore, it is need to be aware to not consuming products that contain seafood, dairy, and egg. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    if($user_peanut == 1)
                    {
                        $Desc = $username . ' is Allergic with Seafood, Dairy, Egg, and Peanut. Therefore, it is need to be aware to not consuming products that contain seafood, dairy, egg, and peanut. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    }
                }
            }
    }
    else if($user_dairy == 1)
    {
        $Desc  = $username . ' is Allergic with Dairy. Therefore, it is need to be aware to not consuming products that contain dairy. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        if($user_egg == 1)
                {
                    $Desc = $username . ' is Allergic with Dairy, and Egg. Therefore, it is need to be aware to not consuming products that contain dairy, and egg. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    if($user_peanut == 1)
                    {
                        $Desc = $username . ' is Allergic with Dairy, Egg, and Peanut. Therefore, it is need to be aware to not consuming products that contain dairy, egg and peanut. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
                    }
                }
    }
    else if($user_egg == 1)
    {
        $Desc = $username . ' is Allergic with Egg. Therefore, it is need to be aware to not consuming products that contain egg. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        if($user_peanut == 1)
        {
            $Desc = $username . ' is Allergic with Egg, and Peanut. Therefore, it is need to be aware to not consuming products that contain egg and peanut. These kinds of product will have significant effect on your health. A conscious and informed approach to product selection is key to maintaining a balanced and healthy lifestyle.';
        }
    }
    else if($user_peanut == 1)
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
            <a href="index.html"><li >Home</li></a>
            <a href="Scan.php"><li class="active">Scan</li></a>
            <a href="About.html"><li>About</li></a>
            <a href="Profile.php"><li><img src="img/Profile.png" alt="">
            </li></a>
        </ul>
    </div>
    <div class="content">
        <a href="Scan.php"><img class="BackButton" src="Assets/BackButton.png" alt="BackButton"></a>
        <h1 class="judul-content">Informasi Scan Produk</h1>
    </div>

    <div class ="foto-produk">
        <img src="produk/<?php echo $nama ?>.jpg" alt="">
    </div>


    <div class="deskripsi-produk">
        <h1 class="nama-produk"><?php echo $nama ?></h1>
        <p class="des1"><?php echo $des1 ?></p>
        <p class="des2"><?php echo $des2 ?></p>
    </div>

    <div class="kandungan-produk">
        <h1 class="judul-kandungan">Kandungan Produk</h1>
    </div>

    <div class="detail-kandungan">
        <table class="table1">
            <tr>
                <td id="kiri">Takaran Saji</td>
                <td><?php echo $serving ?></td>
            </tr>
            
        </table>

        <div class="info-saji">
            <h2 class="judul-perkemasan">Jumlah per-Kemasan</h2>
        </div>
        
        <table class="table2">
            <tr class="atas">
                <td id="kiri">Energi Total</td>
                <td><?php echo $energy ?></td>
            </tr>
            <!-- <hr style="width:80%;"> -->
            <hr>
            
            <tr>
                <td id="kiri">Lemak Total</td>
                <td><?php echo $lemak ?></td> 
            </tr>
            <tr>
                <td id="kiri">Lemak Jenuh</td>
                <td><?php echo $lemakjenuh ?></td>
            </tr>
            <tr>
                <td id="kiri">Protein</td>
                <td><?php echo $protein ?></td>
            </tr>
            <tr>
                <td id="kiri">Karbohidrat Total</td>
                <td><?php echo $karbo ?></td>
            </tr>
            <tr>
                <td id="kiri">Gula Total</td>
                <td><?php echo $gula ?></td>
            </tr>
            <tr>
                <td id="kiri">Garam (natrium)</td>
                <td><?php echo $garam ?></td>
            </tr>      
        </table>
    </div>

    <div class="informasi-user">
        <h1 class="judul-informasi">Informasi Alergi User</h1>
        <p class="isi-informasi"><?php echo $Desc ?></p>
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