<?php
require "loginserver.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>User Login</title>
    <!--
    Template 2105 Input
	http://www.tooplate.com/view/2105-input
	-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
    <style type="text/css">
        body {
            background-image: url(img/hos4k_Fotor.jpg);

        }

        a {
            color: #20c997;
            font-weight: bold;
            font-family: monospace;
        }

    </style>
</head>

<body id="login">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <header class="mb-5">
                    <h3 class="mt-0 white-text"><img src="img/pharmabill_white.png"></h3>
                    <p class="white-text mb-4">A Kut Jok Kuol project designed to focus on the medical store to help pharmaciscts in billing management .</p>
                    <hr>
                    <p><?php include('errors.php'); ?></p>
                </header>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <form action="indexuser.php" method="post" class="tm-signup-form">
                    <div class="input-field">
                        <input placeholder="Email" id="email" name="usermail" type="email" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Password" id="password" name="userpass" type="password" class="validate">
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 tm-border-radius-3" name="userlogin">Login</button>
                    </div>
                    <div class="input-field">
                        <p class="white-text mb-4" style="text-align: left">Don't have an account? <a href="register.php">Signup</a></p>
                        <p class="white-text mb-4" style="text-align: left">Administrator<b>:</b> <a href="indexadmin.php">login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
                    Copyright &copy; 2019 PharmaBill+
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select').formSelect();
        });

    </script>
</body>

</html>
