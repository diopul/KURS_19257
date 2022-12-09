<?php

session_start();
include('config.php');
    $stmt = $connection->prepare("INSERT INTO `Oplata` (card_nomber,card_validity_date,security_code,	Data,Donatio_namount,Product_productid ) VALUES (".$_POST["card_nomber"]." , ".$_POST["card_validity_date"]." , ".$_POST["security_code"]." , 'dataa' , ".$_POST["Donation_amount"]." , 1)");
    $stmt->execute();
    header ('Location:'. 'donat.php');
?>

