<!--==(c)frankline_bwire==-->
<!--==default color #20c997==-->
<?php
include '../loginserver.php';

  if (!isset($_SESSION['user_email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../indexuser.php');
  }
  if (isset($_POST['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: ../indexuser.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="../img/favicon.png" type="image/png" />
  <title>PharmaBill+</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <style type="text/css">
    input {

      border-radius: 3.5px;
      text-align: center;
    }

    #links {
      color: #ccffff;
    }
    #btnlog{
      background-color: teal;
      color: wheat;
      font-weight: bold;
    }

  </style>
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">

      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="home_user.php">
            <img src="pharmabill.png" alt="" />
          </a>

          <!--toggler-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="home_user.php">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="blog.html">Blog</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <!--sign out-->
          <?php  if (isset($_SESSION['user_email'])) : ?>
          <p> <a href="../indexuser.php?logout='1'" class="btn" id="btnlog" name="logout">logout</a> </p>
          <?php endif ?>

          
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="banner_area mb-40" style="background: url(../img/hospsmall_Fotor.jpg); background-repeat: no-repeat; background-size: cover">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0" style="color:#ccffff">
            <h2 style="font-weight: bold; font-family:monospace; color: white">Home</h2>
            <p> <?php echo $_SESSION['success'] . $_SESSION['user_email']; ?></p>
            <p>Theme: Good Health to customers</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area========-->
  <!--================ Offer Area =================-->
  <section class="offer_area">
    <div class="container">
      <div class="row" style="padding-top:20px; padding-bottom:20px">
        <h3 class="text-uppercase mb-40" style="font-weight: bold">Who we are</h3>
        <p>PharmaBill project is designed to focus on the medical store to help them in their billing management with taking care of other details like stock and accounting.</p>
        <p>As today in the country most of the medical stores are manual only which means they maintain their record of the person buying drugs and the quantity of it in the paper files, registers and binders.</p>
        <p>This practice is very reliable and prone to mistakes and omissions. The medical store billing system help the owner of the store in keeping the track of its customer and the drugs he/she is buying from store which further help it in the analysis of getting the stock for the next term.</p>

        <p>Usually when customer buy the medicines from the store the salesperson has to record his/her details in register then person also has to write the medicines details in separate record which is hectic and time consuming.</p>
      </div>
    </div>
  </section>
  <!--================ End Offer Area =================-->

  

  <!--================ start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Newsletter</h4>
          <p>You can trust us. we only send promo offers,</p>
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
              <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
              <button class="click-btn btn btn-default">Subscribe</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());

          </script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by PharmaBill+
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>

      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>
