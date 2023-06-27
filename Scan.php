<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="JsQRScanner-master/JsQRScanner-master/docs/js/jsqrscanner.nocache.js"></script>

    <link rel="stylesheet" href="Scan-Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@600&family=Cormorant:wght@600&family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <?php 
        require('db.php');
        $productname = '';
        if(isset($_POST['hasil'])){
            $scan = $_POST='hasil';

            $query = "SELECT * FROM produk WHERE bpom = '$scan'";
            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                $productname = $row['nama'];
                echo "<script> 
                document.getElementById('scannedTextMemo').value='$productname';
                document.getElementById('scannedTextMemoHist').value += '\n$scannedCode';
                <script>";
            } else {
                echo "<script>
                document.getElementById('scannedTextMemo').value = 'Product not found';
                document.getElementById('scannedTextMemoHist').value += '\n$scannedCode (Not found)';
                 </script>";
            }
            
        }
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
                        <div class="imageContainer">
                            <image src="" alt="#"></image>
                        </div>
                    </div>
                    </div>
                <div class="form-field form-field-memo">
                <div class="form-field-caption-panel">
                    <div class="gwt-Label form-field-caption">
                        Scanned Product
                    </div>
                </div>
                <div class="FlexPanel form-field-input-panel">
                    <textarea id="scannedTextMemo" name="hasil" class="textInput form-memo form-field-input textInput-readonly" rows="3" readonly>
                    </textarea>
                    <?php echo $productname ?>
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
            </div>
            <br>
        </div>
    </div>

    <script type="text/javascript">
        function onQRCodeScanned(scannedText)
        {
            var scannedTextMemo = document.getElementById("scannedTextMemo");
            if(scannedTextMemo)
            {
                scannedTextMemo.value = scannedText;
            }
            var scannedTextMemoHist = document.getElementById("scannedTextMemoHist");
            if(scannedTextMemoHist)
            {
                scannedTextMemoHist.value = scannedTextMemoHist.value + '\n' + scannedText;
            }
        }
        
        //this function will be called when JsQRScanner is ready to use
        function JsQRScannerReady()
        {
            //create a new scanner passing to it a callback function that will be invoked when
            //the scanner succesfully scan a QR code
            var jbScanner = new JsQRScanner(onQRCodeScanned);
            //reduce the size of analyzed images to increase performance on mobile devices
            jbScanner.setSnapImageMaxSize(300);
            var scannerParentElement = document.getElementById("scanner");
            if(scannerParentElement)
            {
                //append the jbScanner to an existing DOM element
                jbScanner.appendTo(scannerParentElement);
            }else{
                onScanFailure(scannerParentElement);
            }
        }
    
        function displayImage(imageUrl) {
            var imageContainer = document.getElementById("imageContainer");
            imageContainer.innerHTML = `<img src="${imageUrl}" alt="Scanned Image" width="100%" height="100%">`;
        }
    
        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            console.error(error);
            console.warn(`Code scan error = ${error}`);
        }
        </script> 
        
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
</body>
</html>