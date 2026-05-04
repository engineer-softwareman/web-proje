<?php
session_start();

$email = $_POST["email"];
$sifre = $_POST["sifre"];

$dogru_email = "b251210566@sakarya.edu.tr";
$dogru_sifre = "b251210566";

if($email == $dogru_email && $sifre == $dogru_sifre){

    $_SESSION["user"] = $sifre;

    header("Location: index.php");
}
else{
    header("Location: login.html");
}
?>