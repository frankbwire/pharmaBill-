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
/*Display all data in table
*All data filtered by Date
*Latest data will be shown first
*/
$query="SELECT * FROM `patient_billing` ORDER by bill_date DESC ";
$result=mysqli_query($conn,$query);
$query2="SELECT * FROM `drug_purchase`";
$result2=mysqli_query($conn,$query2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!--Auto Refresh-->

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
  <script type="text/javascript">




  </script>
  <style type="text/css">
    input {

      border-radius: 3.5px;
      text-align: center;
      background-color: #f5f5f5;
    }

    #links {
      color: #ccffff;
    }

    #btnlog {
      background-color: teal;
      color: wheat;
      font-weight: bold;
    }

    table {
      text-align: center;
      border-width: medium;
      width: 100%;
      
    }

    th {

      border-bottom-width: medium;
    }

    #pid {
      font-weight: bold;
    }

    footer {
      margin-top: 60px;
    }

    #td {
      text-align: left;
      padding-left: 20px
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
                  <li class="nav-item">
                    <a class="nav-link" href="patient_registration.php">Register Patient</a>
                  </li>
                  <li class="nav-item">
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
            <h2 style="font-weight: 900; font-family:monospace; color: white">Invoice</h2>
            <p>Theme: Good Health to customers</p>
          </div>
          <div class="page_link">
            <a href="home_pharmacist.php" id="links">Home</a>
            <a href="view_billing.php" id="links">Invoice</a>
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
        <h3>Invoice</h3>
        <p>View and checkout billing orders</p>
        <hr>

        <form action="#" style="width:25%">
          <div class="form-group">
            <div class="input-group mb-3">
              <input type="text" class="form-control" value="SN-" id="myInput" onkeyup="myFunction()">
              <div class="input-group-append">
                <button class="btn" type="button"><i class="ti-search" name="search"></i></button>
              </div>
            </div>
          </div>
        </form>


        <table align="center" border="1" id="myTable">
        
            <th colspan="6" id="th">
              <h3 class="mb-20" style="font-weight: bold;font-family:times new roman">Invoice:</h3>
            </th>
          
        

          <tr>
            <th>Bill_number</th>
            <th>Patient_id</th>

            <th>Medicine</th>
            <th>Quantity</th>
            <th>Price per Unit</th>
            <th>Total Bill</th>

          </tr>
          <?php
                            while ($rows=mysqli_fetch_assoc($result2))
                            {
                             ?>
          <tr>
            <td id="pid">
              <?php echo $rows['bill_number']; ?>
            </td>
            <td id="pid">
              <?php echo $rows['patient_id']; ?>
            </td>

            <td id="td">
              <?php echo $rows['med_category']; ?>
              <br><strong>Medicine: </strong>
              <?php echo $rows['med_name']; ?>
            </td>
            <td id="td">
              <?php echo $rows['med_quantity']; ?>
            </td>

            <td id="td">
              <?php echo $rows['med_price']; ?>
            </td>
            <td id="td">
              <?php echo $rows['total']; ?>

            </td>
          </tr>
          <?php
                           }
                           ?>
          <tr>
          <td colspan="6" style="height:10px"><hr style="background-color: #20c997"></td></tr>
          <tr>
            <th>Bill_id</th>
            <th>Checkup_date</th>
            <th>Doctore comments</th>
            <th>Date</th>
          </tr>
          <?php
                            while ($rows=mysqli_fetch_assoc($result))
                            {
                             ?>
          <tr>
            <td id="pid">
              <?php echo $rows['bill_number']; ?>
            </td>
            <td id="td">
              <?php echo $rows['checkup_date']; ?>

            </td>
            <td id="td">
              <?php echo $rows['comments']; ?>

            </td>

            <td id="td">
              <?php echo $rows['bill_date']; ?>
            </td>


          </tr>
          <?php
                           }
                           ?>

         
        </table>


      </div>
    </div>
  </section>
  <!--================End Patient Ragistration=================-->

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
  <!--Search table using location-->
  <script>
    function myFunction() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

  </script>
</body>

</html>
