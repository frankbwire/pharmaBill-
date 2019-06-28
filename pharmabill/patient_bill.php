<?php

require 'server.php';
include '../loginserver.php';

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../index.php');
  }
  if (isset($_POST['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: ../index.php");
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <link rel="icon" href="../img/favicon.png" type="image/png" />
  <title>iBill+</title>
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
      background-color: #f5f5f5;
    }

    #links {
      color: #ccffff;
    }

    #btn {
      border-radius: 10px;
      border-color: black;
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
                    <a class="navbar-brand logo_h" href="home_pharmacist.php">
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
                            <div class="col-lg-10 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                   <li class="nav-item ">
                    <a class="nav-link" href="home_pharmacist.php">Home</a>
                  </li>
                                  
                  <li class="nav-item  ">
                    <a class="nav-link" href="patient_registration.php">Register Patient</a>
                  </li>
                  <li class="nav-item active" >
                    <a class="nav-link" href="patient_bill.php">Bill Patient</a>
                  </li>
                                  <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="view_patient.php">Patients</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="view_billing.php">Invoice</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                              
                              
                            </div>
                        </div>
                    </div>
               <!--sign out-->
          <?php  if (isset($_SESSION['email'])) : ?>
          <p> <a href="../index.php?logout='1'" class="btn" id="btnlog">logout</a> </p>
          <?php endif ?>

                </nav>
            </div>
        </div>
    </header>
  <!--================Header Menu Area =================-->
  <!--==(c)frankline_bwire==-->
  <!--================Home Banner Area =================-->
  <section class="banner_area mb-40" style="background: url(../img/charge.jpg); background-size: cover">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0" style="color:#ccffff">
            <h2 style="font-weight: 900; font-family:monospace; color: white">Patient Bill</h2>
            <p>Theme: Good Health to customers</p>
          </div>
          <div class="page_link">
            <a href="index.html" id="links">Home</a>
            <a href="patient_bill.html" id="links">Patient Bill</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area========-->
  <!--==============Patient Registration==========-->
  <section class="tracking_box_area">
    <div class="container">
      <div class="tracking_box_iner">
        <h3 style="font-weight: 600">Billing</h3>
        <p>Proceed to billing</p>
        <hr>

        <form class="row tracking_form" action="#" method="post" novalidate="novalidate" style="margin-left: 50px">

          <div class="col-md-11 form-group" id="form-title">
            <p style="font-weight: bold; text-align: center;font-family:bauhaus 93; font-size: 0.8cm">iBill<strong style="color: #20c997">+</strong></p>
            <hr style="background-color: #20c997">
            <hr style="background-color: #20c997">
          </div>

          <div class="col-md-11 form-group" style="padding-bottom: 15px ">
            <!--bill no-->
            <label for="billid" style="margin-right: 20px">Bill Number:</label>
            <input style="text-indent: 10px" type="text" name="bnumber" value="SN-<?php echo(rand(10000,99990)) ?>" readonly>

            <!--date function-->
            <label for="billdate" style="margin-left: 50px">Date:</label>
            <input readonly type="text" name="bdate" placeholder="Current Date" style="" value="<?php print date("m/d/y G.i.s") ?>">
          </div>
          <div class="col-md-11 form-group" style="padding-bottom: 15px">
            <!--Customer details-->
            <p style="font-weight: 100; font-family: monospace">Provide correct patient id to allow purchase of the drug. <a href="patient_registration.html" style="color: #20c997">Register here</a> for new patients.</p>
            <label for="cutomer details" style="margin-right: 20px">Patient ID:</label>
            <input type="text" name="bpid" placeholder="patient_id" value="N-" style="margin-left: 5px; width:30%; text-align: left; text-indent: 10px" maxlength="7">
            <p><?php include('errors.php'); ?></p>
          </div>
          <div class="col-md-11 form-group" style="padding-bottom: 15px">
            <hr>
            <p style="font-family: sans-serif;font-weight: bold">Medicine information</p>
            <p style="font-weight: 100; font-family: monospace">Provide correct information below of the purchased drug in regard to quantity, drug category and name</p>
            <hr>
          </div>
          <!--=====<section>======-->
          <div class="col-md-11 form-group" style="padding-left:50px; padding-bottom: 15px">
            <!--medcat-->
            <select style="width: 50%" name="medcat">
              <option>Medicine Category*</option>
              <option>ANAESTHETICS</option>
              <option>PAIN and PALLIATIVE CARE</option>
              <option>ANTIALLERGICS and ANAPHYLAXIS</option>
              <option>ANTIDOTES and POISONING</option>
              <option>Antibacterials</option>
              <option>Antifungals</option>
              <option>Antivirals</option>
              <option>Antiprotozoals</option>
              <option>Hormones and antihormones</option>
            </select>
            <!--med name-->
            <label for="drugname" style="margin-left: 50px">Medicine Name:</label>
            <input type="text" name="medname" placeholder="Drug Name" style="width: 25%">
          </div>
          <div class="col-md-11 form-group" style="padding-left:50px; padding-bottom: 15px">
            <!--quantity-->
            <input type="text" name="medqty" placeholder="Quantity " style="width: 40%">
            <!--price-->
            <input type="text" id="price" name="medprice" placeholder="Price per unit" style="width: 40%; margin-left: 50px">
            <hr>
          </div>
          <!--====</section> <section>====-->
          <div class="col-md-11 form-group" style="padding-left:50px; padding-bottom: 15px">
            <!--medcat-->
            <select style="width: 50%" name="city">
              <option>Medicine Category*</option>
              <option>ANAESTHETICS</option>
              <option>PAIN and PALLIATIVE CARE</option>
              <option>ANTIALLERGICS and ANAPHYLAXIS</option>
              <option>ANTIDOTES and POISONING</option>
              <option>Antibacterials</option>
              <option>Antifungals</option>
              <option>Antivirals</option>
              <option>Antiprotozoals</option>
              <option>Hormones and antihormones</option>
            </select>
            <!--med name-->
            <label for="drugname" style="margin-left: 50px">Medicine Name:</label>
            <input type="text" id="address" name="address" placeholder="Drug Name" style="width: 25%">
          </div>
          <div class="col-md-11 form-group" style="padding-left:50px; padding-bottom: 15px">
            <!--quantity-->
            <input type="text" id="qty" name="qty" placeholder="Quantity " style="width: 40%">
            <!--price-->
            <input type="text" id="price" name="price" placeholder="Price per unit" style="width: 40%; margin-left: 50px">
            <hr>
          </div>
          <!--====</section> <section>====-->

          <!---======</section>===========-->

          <div class="col-md-11 form-group" style=" padding-bottom: 15px">
            <label for="comments">Prescription/Comments:</label>
            <textarea name="comm" cols="10" rows="5" style="margin-left: 25px; width:65%;font-family:monospace" maxlength="300"></textarea>
          </div>
          <!--checkup-->
          <div class="col-md-11 form-group" style=" padding-bottom: 15px">
            <label for="checkup">Checkup Date:</label>
            <input type="date" id="checkup" name="cdate" placeholder="" style="width:30%;margin-left: 25px; text-align: center">
          </div>

          <!--==<div class="col-md-11 form-group">
                        <hr>
                        <p style="background-color: #20c997; font-weight: bold; text-align: center">Emergency Contacts</p>
                    </div>==-->




          <div class="col-md-12 form-group" style="text-align: left">
            <br>
            <button id="btn" type="submit" value="submit" class="btn submit_btn" name="bsubmit" onclick="Aler()"><strong>Proceed->>></strong></button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--================End Patient Ragistration=================-->
  <!--================ End Offer Area =================-->

  <!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">

    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="patient_registration.php" class="title">
              <i class="flaticon-money"></i>
              <h3>Register Patient</h3>
            </a>
            <p>Register new patients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="patient_bill.php" class="title">
              <i class="flaticon-truck"></i>
              <h3>Bill Patient</h3>
            </a>
            <p>Medicine checkout</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="view_patient.php" class="title">
              <i class="flaticon-support"></i>
              <h3>Query Patient</h3>
            </a>
            <p>View patient information</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="view_billing.php" class="title">
              <i class="flaticon-blockchain"></i>
              <h3>Invoice</h3>
            </a>
            <p>view invoice</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->

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
  <script type="text/javascript">
  
              function Alert() {
                var aa = confirm("Proceed with billing");
                if (aa == true) {
                    alert("Billing Sucessfull");
                    return true;
                } else {
                    alert("Cancelled");
                    return false;
                }
            }
  </script>
</body>

</html>
