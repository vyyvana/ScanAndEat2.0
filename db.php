<?php
    $con = mysqli_connect("localhost", "root", "", "scanneat");

    if(mysqli_connect_errno()){
        echo "Failed to connect to MysQL: ".mysqli_connect_errno();
    }
?>