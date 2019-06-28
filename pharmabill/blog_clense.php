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
    #btnlog {
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
              <img class="img-fluid" src="img/detox.png" alt="">
            </div>
            <div class="blog_details">
              <h2>Colon Cleansing in Kenya to Improve Colon Function</h2>
              <ul class="blog-info-link mt-3 mb-4">
                <li><i class="ti-user"></i> Health, Lifestyle</li>

              </ul>
              <p class="excert">
                Before we get into the colon cleansing price in Kenya, first let’s understand the basics. A healthy and disease free alimentary canal is an important as far as a healthy functional body system goes. The colon, the small and large intestines, make up the larger portion of food absorption components of the human body. Therefore, if the colon is not clean, it cannot function properly hence disrupt this important process. Not only that, the toxin released by the accumulated fecal matter in the colon and intestines can enter the bloodstream and cause a number of issues. These toxins can also cause diseases of the colon hence the need to excrete them as soon as they get there..

              </p>
              <div class="quote-wrapper">
                <div class="quotes">
                  Some signs that signify a colon detoxification in Kenya is imminent include; headaches, tiredness, PMS, and of course, constipation associated with gas. Colon detox and cleansing procedures can be undertaken, including enemas, colon cleansing capsules, colonic irrigation, laxative herbs, pre/probiotics and dietary fibre. Each one of these can work, hence it’s upon an individual to determine which one is best for them.
                </div>
              </div>


              <p>
                Another viable option is to use oxygen based colon cleansers in Kenya. This method is more chemical but very natural and deploys magnesium oxide pretreated with ozone and oxygen. Yeah. I know, you are asking questions like “should I first get a degree in Pharmacy to use this?” No. Magnesium oxide reacts with the stomach’s Hydrochloric acid to release oxygen, which enters the bloodstream to replenish the whole body. Basic Biology dictates that the colon’s normal flora is flourished by Oxygen, which the unfavourable ones is flourished by other gases. Unfavorable bacteria in the human colon will give you issues of frequent firting, vomiting, diarrhea, and or cramps. Favorable bacteria competes with the unfavorable ones for living space, and will beat them if they are more obviously hence eliminate these issues. There are many oxygen based colon cleansers in Kenya, talk to your nearest pharmaceutical practitioner for more.

              </p>
              <p>
                Look for a colon detox product in Kenya that is available in a capsule form, meaning it will be easy to swallow and use. Colon cleansing price in Kenya of these products differ, but ensure it does not include vitamin c among the ingredients because the antioxidant vitamin c or in chemical terms as will reverse the good that could be done by such a supplement. A product like Bell Lifestyle’s Colon Care and Cleanser covers everything needed for a proper do-it-yourself procedure. It contains 100% natural ingredients hence suitable for all types of adults.
              </p>
            </div>
          </div>
          <!--Comment Form-->
          <div class="comment-form">
            <h4>Leave a Reply</h4>
            <form class="form-contact comment_form" action="blog_clense.php" method="post" id="commentForm">
              <?php include 'error.php' ?> <!--Posts a message when there is an error-->
              <?php echo $success; ?> <!--Posts a message when there is no error-->
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" maxlength="300" required></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="commentor" id="commentor" type="text" placeholder="Name" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="comail" id="comail" type="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Subject" required>
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
</body>

</html>
