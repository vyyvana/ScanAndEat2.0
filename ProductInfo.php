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
        <img class="BackButton" src="/Assets/BackButton.png" alt="BackButton">
        <h1 class="judul-content">Informasi Scan Produk</h1>
    </div>

    <div class ="foto-produk">
        <img src="/Assets/TropicaNaslim.png" alt="">
    </div>


    <div class="deskripsi-produk">
        
        <h1 class="nama-produk"><?php echo $username ?></h1>
        <p class="des1">Tropicana Slim Avocado Coffee merupakan minuman kopi dengan rasa alpukat yang nikmat dan lebih rendah kafein.</p>
        <p class="des2">Aman untuk dikonsumsi oleh  segala usia, termasuk ibu hamil dan menyusui.</p>
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
            <p class = "info-sajian">4 sajian per-Kemasan</p>
            <hr>
            <!-- <br> -->
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
                <td><?php echo $username ?></td>
            </tr>      
        </table>
    </div>

    <div class="informasi-user">
        <h1 class="judul-informasi">Informasi Alergi User</h1>
        <p class="isi-informasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis urna lobortis, molestie nibh a, tempor metus. Nulla facilisis, ex in porta volutpat, nulla lectus auctor metus, vel bibendum ipsum dolor quis metus. Pellentesque quam eros, fermentum sed massa ut, placerat placerat tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia neque id est dignissim, auctor dictum nisl fringilla. Donec tempor neque sit amet odio iaculis, fermentum ultrices tellus commodo. Morbi pharetra mi in lorem dignissim laoreet. Nam sodales arcu nec est aliquet blandit. Cras eleifend magna arcu, sit amet tempus sem euismod at. Integer euismod nulla quam, a eleifend ex elementum ut. Nulla eu elit lobortis, porttitor odio at, rutrum nisi. Fusce interdum nec ligula vel malesuada. Sed nec scelerisque lacus. Integer nisl justo, varius mattis mi sit amet, faucibus condimentum tortor.</p>
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