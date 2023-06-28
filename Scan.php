<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="JsQRScanner-master/JsQRScanner-master/docs/js/jsqrscanner.nocache.js" defer></script>

    <link rel="stylesheet" href="Scan-Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@600&family=Cormorant:wght@600&family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="script.js" defer></script>
</head>
<body>
    <?php 
    
        require('db.php');
        session_start();
        
        if(isset($_POST['bpom'])){
            $bpom = stripslashes($_REQUEST['bpom']); 
            $bpom = mysqli_real_escape_string($con, $bpom);
            // Check user is exist in the database
            $query    = "SELECT * FROM produk WHERE bpom='$bpom'";
            $result = mysqli_query($con, $query) or die(mysql_error($con));
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['bpom'] = $bpom;
                header("Location: ProductInfo.php");
            } else {
                echo "<div class='form'>
                      <h3>No Product Fone.</h3><br/>
                      <p class='link'>Click here to <a href='Scan.php'>Scan</a> again.</p>
                      </div>";
            }
        } else {
    ?>
    <div class="header_all">
        <div class="header_logo">
            <a href="index.html"><img src="img/SCAN & EAT.png" alt=""></a>
        </div>

        <ul>
            <a href="index.html"><li>Home</li></a>
            <a href="Scan.php"><li class="active">Scan</li></a>
            <a href="About.html"><li>About</li></a>
            <a href="Profile.php"><li><img src="img/Profile.png" alt="">
            </li></a>
        </ul>
    </div>

    <div class="row-element-set row-element-set-QRScanner">
        <div class="row-element">
            <div class="FlexPanel detailsPanel QRScannerShort">
            <div class="FlexPanel shortInfoPanel">
                <div class="gwt-HTML">
                    Please open your camera to scan QR code.
                </div>
            </div>
            </div>
        </div>
        <br>
        
        <div class="row-element">
            <div class="qrscanner" id="scanner"></div>
        </div>

        <div class="box-color">
            <h1 class="h1-green">Hasil Scan Product</h1>
            <div class="row-element">
                <div class="form-field form-field-memo">
                    <div class="form-field-caption-panel">
                        <div class="gwt-Label form-field-caption">
                            Scanned Image
                        </div>
                    </div>
                    <div class="FlexPanel form-field-input-panel">
                        <div id="imageContainerDiv" class="imageContainer"></div>
                    </div>
                    </div>
                <div class="form-field form-field-memo">
                <div class="form-field-caption-panel">
                    <div class="gwt-Label form-field-caption">
                        Scanned Product
                        <!-- <img src="<?php echo $productimg ?>" alt=""> -->
                    </div>
                </div>
                <div class="FlexPanel form-field-input-panel">
                    <textarea id="scannedTextMemo" class="textInput form-memo form-field-input textInput-readonly"  rows="6" readonly>
                    </textarea>
                </div>
                </div>
                <div class="form-field form-field-memo">
                <div class="form-field-caption-panel">
                    <div class="gwt-Label form-field-caption">
                        Scanned text history
                    </div>
                </div>
                <div class="FlexPanel form-field-input-panel">
                    <textarea id="scannedTextMemoHist" class="textInput form-memo form-field-input textInput-readonly" value="" rows="6" readonly>
                    </textarea>
                </div>
                </div>
                <form action="" method="post" class="form">
                    <input type="text" class="bpom" name="bpom" id="bpom">
                    <input type="submit" value="Submit" name="submit" class="login-button"/>
                </form>
            </div>
            <br>
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
    </div>
    <div>
        <ul><?php  ?></ul>
    </div>
    <script>
        JsQRScannerReady();
    </script>
<?php
    }
?>
</body>
</html>
