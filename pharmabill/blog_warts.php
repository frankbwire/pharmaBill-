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
              <img class="img-fluid" src="img/genital.jpg" alt="">
            </div>
            <div class="blog_details">
              <h2>Are Genital Warts in Kenya Serious?</h2>
              <ul class="blog-info-link mt-3 mb-4">
                <li><i class="ti-user"></i> Health, Lifestyle</li>
                
              </ul>
              <p class="excert">
            There are a lot of people that have had to deal with genital warts in Kenya. For most of those people, the warts are only a bother. They are usually treated with some medicine and then forgotten about. It depends on the seriousness of the problem but it is not something that anyone wants to brag about though. Unless of cause you are running adverts to be paid 🙂

              </p>
              <div class="quote-wrapper">
                <div class="quotes">
                  If women have genital warts on the cervix, now that can be a problem, it can cause women to have an abnormal pap smear. If this is left unattended, it may cause even more problems down the road like cancer. Women should have a pelvic exam at least every six months to a year. Men and women who have warts on or inside the anus should have an exam every year.
                </div>
              </div>


              <p>
               Treating genital warts in Kenya is not hard. You will get good advice and help from many of the doctors and professionals that you see. They can use a chemical on the warts to remove them. You may need to come back to ePharmacy Kenya more than once to finish the treatment to take care of the problem. If someone has a problem with their immune system, they may find that the treatment may take longer. An example of this may be those with HIV infections. The warts may increase in size and the number of them may increase faster. This is why you need to tell your doctor if you are HIV positive.
              </p>
              <p>
              Even after you have the genital warts removed, they may return. yes. This is because the virus stays in your skin once you are infected. You can pass the virus to your sexual partners while having unprotected sex. This is possible even if you have warts and do not see them. It is so important to practice safe sex when you have had or do have genital warts.
              </p>
              <p>
              You should check yourself often for signs of the warts. The actual genital warts can be treated. However, you can not treat the virus. You will always have the virus in your skin that can break out at any time. You need to use condoms when you have sex. Condoms greatly reduce your risk for getting the disease or spreading it to your partners. Even though it is recommended that you use condoms, it is no guarantee that you are going to stop the problem. It is just an important method to practice every time you have sex. This will help in preventing other STDís as well.
              </p>
              <p>
              The main thing to do to prevent getting infected is to be careful. You should know your partners and have a good relationship with them first. You need to practice safe sex so that you do not put yourself at risk. It is important to your health and to your life. You only get once chance at being healthy and you do not want to have to deal with genital warts in Kenya.
              </p>
            </div>
          </div>
          <!--Comment Form-->
          <div class="comment-form">
            <h4>Leave a Reply</h4>
            <form class="form-contact comment_form" action="blog_warts.php" method="post" id="commentForm">
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