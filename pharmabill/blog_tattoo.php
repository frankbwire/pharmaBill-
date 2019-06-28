<?php
include 'contact_process.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="../img/favicon.png" type="image/png" />
  <title>Pharmabill+</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
    <style type="text/css">
        
     #btnlog{
      background-color: teal;
      color: wheat;
      font-weight: bold;
    }

      ul{
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
            <h2 style="font-weight: bold; font-family:monospace; color: white">Blog</h2>
            <p>Theme: Good Health to customers</p>
          </div>
         <div class="page_link">
                        <a href="home_user.php" style="color: #ccffff; font-weight: bold" id="links">Home</a>
            <a href="blog.html" style="color: #ccffff; font-weight: bold" id="links">BlogHome</a>
                    </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area========-->

  <!--================Blog Area =================-->
  <section class="blog_area single-post-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          <div class="single-post">
            <div class="feature-img">
              <img class="img-fluid" src="img/epic.jpg" alt="">
            </div>
            <div class="blog_details">
              <h2>TATTOO IN KENYA: 4 Steps You Should Take!</h2>
              <ul class="blog-info-link mt-3 mb-4">
                <li><i class="ti-user"></i> Health, Lifestyle</li>
                
              </ul>
              <p class="excert">
              Obviously concerns have been raised about getting a tattoo in Kenya because when you get a tattoo, the possiblity of pain and your risk of getting an infection pass through one’s mind before they step into a tattoo designer’s studio in Nairobi.

              </p>
              <div class="quote-wrapper">
                <div class="quotes">
                 ensure you take you time in choosing the good steps in choosing the right tattoo and tattoo artist in Kenya. Remember after the procedure you will have some time to heal before you start showing it off, otherwise it will be infected and your beautifully done butterfly will turn into one wound no one will know what it represent. Do as much research about tattoo art safety and the artists who do it and when you’re ready to get your tattoo, you will feel much better about your decision!
                </div>
              </div>

<ul>
              <li>Can I Get Infectious Diseases From Tattoo in Kenya Needles?</li></ul>
              <p>
              The recent concerns regarding transmittable diseases like HIV/AIDS  and Hepatitis-B tattoo shops are valid. But as it is even in a hospital or a dentist’s office, sanitisation is key in preventing this and if you walk into an untidy tat parlour, walk out as though you had lost your way.
              </p>
              <ul>
              <li>Can I Get AIDS From A Tattoo in Kenya?</li></ul>
              <p>
              When needles used to inject drugs or such like chemicals are passed from one person to another person and reused without comprehensive sterilisation, the blood from the first user will remain in the needle hence passed to the next user. If the first user is infected with HIV, then he/she will pass the viral component to the nest user, which leads to AIDS. Tattooing and inking procedures is VERY different as compared to injection drugs. Unlike injection needles, tattoo needles are not hollow. They do, however, travel back and forth through a hollow tube that acts as an ink reservoir. The tip of the tube is dipped into the ink, which draws a little into the tube.
              </p>
              <ul>
              <li>Can My Tattoo’s Get Infected?</li></ul>
              <p>
             New tats can get very severe infections, 1. if done wrongly 2. if the wound doesn’t get proper care after the procedure. Nonetheless, as long as you take proper care of your new tattoo, you won’t have any issues. The tattoo artist in Kenya will give you guides on how to take care of the tat, with some creams. The other issue is that some people could be allergic to the inks use, hence get an allergic reaction. This can be managed by antihistamines, but some many require medical intervention.
              </p>
              <ul>
              <li>What Are Some Bad Things For My New Tattoo?</li></ul>
              <p>
              Nothing can screw up a tattoo once it has healed. However, prolonged exposure to intense sunlight or sunlight high in UV can destroy the tat or make it fade. Another problem is scarring especially when the tat isn’t done properly hence leaving you with a permanent scar.
              </p>
            </div>
          </div>
          <!--Comment Form-->
          <div class="comment-form">
            <h4>Leave a Reply</h4>
            <form class="form-contact comment_form" action="blog_tattoo.php" method="post" id="commentForm">
              <?php include 'error.php' ?> <!--Posts a message when there is an error-->
              <?php echo $success; ?> <!--Posts a message when there is no error-->
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" maxlength="300"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="commentor" id="commentor" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="comail" id="comail" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Subject">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="send_message" class="main_btn">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="blog_right_sidebar">
            <!--RECENT POSTS-->
            <aside class="single_sidebar_widget popular_post_widget">
              <h3 class="widget_title">Recent Post</h3>
              <div class="media post_item">
                <div class="media-body">
                  <a href="blog_clense.php">
                    <h3>Colon Cleansing in Kenya to Improve Colon Function</h3>
                  </a>
                  <p>January 12, 2019</p>
                </div>
              </div>
              <div class="media post_item">
              
                <div class="media-body">
                  <a href="blog_register.php">
                    <h3>How To Register and Operate a Pharmacy/Chemist in Kenya
</h3>
                  </a>
                  <p>02 Hours ago</p>
                </div>
              </div>
              <div class="media post_item">
                
                <div class="media-body">
                  <a href="blog_tattoo.php">
                    <h3>TATTOO IN KENYA: 4 Steps You Should Take!</h3>
                  </a>
                  <p>03 Hours ago</p>
                </div>
              </div>
              <div class="media post_item">
                <div class="media-body">
                  <a href="blog_warts.php">
                    <h3>Are Genital Warts in Kenya Serious?</h3>
                  </a>
                  <p>01 Hours ago</p>
                </div>
              </div>
              <div class="media post_item">
                <div class="media-body">
                  <a href="blog_pharmacy.php">
                    <h3>Online Pharmacy Shop in Kenya – Why to Consider</h3>
                  </a>
                  <p>01 Hours ago</p>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog Area =================-->

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
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</body></html>