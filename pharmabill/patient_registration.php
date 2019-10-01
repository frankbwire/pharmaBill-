<?php
require 'server.php';

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
    <title>Pharmabill+</title>
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
                  <li class="nav-item active ">
                    <a class="nav-link" href="patient_registration.php">Register Patient</a>
                  </li>
                  <li class="nav-item" >
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

    <!--================Home Banner Area =================-->
 <section class="banner_area mb-40" style="background: url(../img/programming.jpg); background-size: cover">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0" style="color:#ccffff">
                        <h2 style="font-weight: 900; font-family:monospace; color: white">Patient Info.</h2>
                        <p>Theme: Good Health to customers</p>
                    </div>
                    <div class="page_link">
                        <a href="home_pharmacist.php" id="links">Home</a>
                        <a href="patient_registration.php" id="links">Patient Info.</a>
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
                <h3>Register Patient</h3>
                <p>Enter patient details below to register patient.</p>
                <hr>

                <form class="row tracking_form" action="patient_registration.php" method="post" novalidate="novalidate" style="margin-left: 50px">
                    <div class="col-md-11 form-group" id="form-title">
                        <p style="background-color: #20c997; font-weight: bold; text-align: center">Patient information</p>
                    </div>
                    <div class="col-md-12 form-group" style="padding-bottom: 15px; ">
                        <!--bill no-->
                        <label for="customerid">Patient ID:</label>
                        <input type="text" name="pid" value="N-<?php echo(rand(10000,99990)) ?>" readonly>
                        <!--date function-->
                        <label for="date" style="margin-left:20px">Date:</label>
                        <input type="text" id="date" name="email" placeholder="Current Date" value="<?php print date("m/d/y G.i:s");  ?>" readonly>
                    </div>
                    <div class="col-md-12 form-group" style="padding-left:50px; padding-bottom: 15px">
                        <!--first name-->
                        <input type="text" id="fname" name="fname" placeholder="First Name" style="width: 25%" required>
                        <!--middle name-->
                        <input type="text" id="mname" name="mname" placeholder="Middle Name" style="margin-left: 50px; width:25%" required>
                        <!--last name-->
                        <input type="text" id="fname" name="lname" placeholder="Last Name" style="margin-left: 50px; width: 25%" required>
                    </div>
                    <div class="col-md-12 form-group" style="padding-left:50px; padding-bottom: 15px">
                        <!--email-->
                        <input type="email" id="email" name="email" placeholder="Email Address" style="width: 40%" required>
                        <!--phone number-->
                        <input type="text" id="phone" name="phone" placeholder="Phone Number" style="width: 40%; margin-left: 50px" required>
                    </div>
                    <div class="col-md-12 form-group" style="padding-left:50px; padding-bottom: 15px">

                        <!--id number-->
                        <input type="text" id="idno" name="idno" placeholder="ID Number" style="width: 40%" required>
                    </div>
                    <div class="col-md-12 form-group" style="padding-left:50px; padding-bottom: 15px">
                        <!--age-->
                        <input type="text" id="age" name="age" placeholder="Age" style="width: 25%" required>
                        <!--dob-->
                        <input type="date" id="dob" name="dob" placeholder="dob" style="width: 25%;margin-left: 50px" required>
                        <!--gender-->
                        <strong style="margin-left: 25px;padding-right: 10px; color: #20c997">Gender| |</strong> Male <input type="radio" name="gender" value="Male" placeholder="male"> Female <input type="radio" name="gender" value="female" placeholder="female">
                    </div>
                    <div class="col-md-12 form-group" style="padding-left:50px; padding-bottom: 15px">
                        <!--City-->
                        <select style="width: 50%" name="city">
                            <option selected>Select City*</option>
                            <option>Nairobi</option>
                            <option>Mombasa</option>
                            <option>Nakuru</option>
                            <option>Eldoret</option>
                            <option>Kisumu</option>
                            <option>Busia</option>
                            <option>Marsabit</option>
                        </select>
                        <!--Address-->
                        <input type="text" id="address" name="address" placeholder="Address (eg. 123 Avenue)" style="width: 40%; margin-left: 50px" required>
                    </div>

                    <div class="col-md-11 form-group">
                        <hr>
                        <p style="background-color: #20c997; font-weight: bold; text-align: center">Emergency Contacts</p>
                    </div>
                    <div class="col-md-12 form-group" style="padding-left:50px; padding-bottom: 15px">
                        <!--emergency name-->
                        <input type="text" id="ename" name="ename" placeholder="Name of local friend or relative " style="width: 40%" required>
                        <!--relationship-->
                        <input type="text" id="relationship" name="rel" placeholder="Relationship to patient" style="width: 40%; margin-left: 50px" required>
                    </div>

                    <div class="col-md-12 form-group" style="padding-left:50px; padding-bottom: 15px">
                        <!--emergency phone-->
                        <input type="text" id="ephone" name="ephone" placeholder="Phone Number" style="width: 40%" required>
                        <!--gender-->
                        <strong style="margin-left: 50px;padding-right: 10px; color: #20c997">Gender| |</strong> Male <input type="radio" name="egender" value="Male" placeholder="male"> Female <input type="radio" name="egender" value="female" placeholder="female">
                    </div>
                    <div class="col-md-12 form-group" style="padding-left:50px; padding-bottom: 15px">
                        <!--emergency ID-->
                        <input type="text" id="eidno" name="eidno" placeholder="Kin ID Number" style="width: 40%" required>
                    </div>
                  

                    <div class="col-md-12 form-group" style="text-align: center">
                        <br>
                        <button type="submit" value="submit" name="register" class="btn submit_btn" onclick="Alert()">Register</button>
                        <button type="reset" value="Reset" class="btn submit_btn" style="margin-left: 80px">Reset Form</button>
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
                var aa = confirm("Proceed with registration");
                if (aa == true) {
                    alert("Patient Ragistration Sucessfull");
                    return true;
                } else {
                    alert("Cancelled");
                    return false;
                }
            }
  </script>
</body>

</html>
