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
    <title>User SignUp</title>
	<!--
    Template 2105 Input
	http://www.tooplate.com/view/2105-input
	-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
  <style type="text/css">
  
    body{
      background-image: url(img/hos4k_Fotor.jpg);
      background-size: cover;
      background-position: center;
    }
        a{
      color: #20c997;
       font-weight: bold;
      font-family: monospace;
    }

  
  </style>
</head>

<body id="register">
    <div class="container">
        <div class="row tm-register-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-l">
                <form action="register.php" method="post">
                    
                    <div class="mb-2">
                        <label class="mr-4">
                            <input class="with-gap" name="title" type="radio" value="mr" />
                            <span>Mr.</span>
                        </label>
                        <label class="mr-4">
                            <input class="with-gap" name="title" type="radio" value="ms" />
                            <span>Ms.</span>
                        </label>
                        <label>
                            <input class="with-gap" name="title" type="radio" value="mrs" />
                            <span>Mrs.</span>
                        </label>
                    </div>

                    <div class="input-field">
                        <input placeholder="First Name" id="first_name" name="first_name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Last Name" id="last_name" name="last_name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                      
                        <input placeholder="Email" id="email" name="email" type="text" class="validate">
                    </div>
                    <div class="input-field">
                    
                        <input placeholder="Mobile" id="mobile" name="mobile" type="text" class="validate">
                    </div>
                    <div class="input-field">
                     
                        <input placeholder="Password" id="password1" name="password1" type="password" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Repeat Password" id="password2" name="password2" type="password" class="validate">
                    </div>
                    
                    
                    
                    <div class="text-right mt-3">
                      <button type="submit" class="waves-effect btn-large btn-large-white px-4 tm-border-radius-3" name="signup">Sign Up</button>
                    </div>
                   <div class="input-field">
                  <p class="grey-text mb-4" style="text-align: left">Already a member? <a href="indexuser.php">Login</a></p>
                  </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
                <header class="mb-5">
                   <h3 class="mt-0 white-text"><img src="img/pharmabill_white.png"></h3>
                    <p class="white-text">Create an account to enoy the affordable services that PharmaBill+ offers.</p>
                    <p class="white-text">Our Theme: <strong style="font-weight: bold;">Good health to customers</strong>
                        
                    </p>
                    <hr>
                    <p><?php include('errors.php'); ?></p>
                </header>

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
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>