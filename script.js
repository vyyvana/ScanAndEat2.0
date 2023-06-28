function onQRCodeScanned(scannedText)
        {
            var scannedTextMemo = document.getElementById("scannedTextMemo");
            console.log("test");
            
            document.addEventListener("DOMContentLoaded", function() {
                
                // var input = document.getElementById("bpom");
                // input.value = scannedText;
                console.log("hei");
            });
            var input = document.getElementById("bpom");
            input.value = scannedText;
            
            
            
           
            
            if(scannedTextMemo)
            {
                scannedTextMemo.value = scannedText;
                console.log("test1");
                // sendScannedTextToPHP(scannedText);
                
            }
            var scannedTextMemoHist = document.getElementById("scannedTextMemoHist");
            console.log("test2");
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