<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header("Location: Login.php");
        exit();
    }
    if(!isset($_SESSION["bpom"])){
        header("Location: Scan.php");
        exit();
    }
?>