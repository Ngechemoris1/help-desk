<?php
session_start();
error_reporting(0);
include('config.php');
include "header.php";
if (isset($_POST['send'])) {
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $contactno = $_POST['contactno'];
  $message = $_POST['message'];
  $datep = $_POST["datereported"];
  $timep = $_POST["timereported"];
  $sql = "INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message, dateposted, timeposted) VALUES(:name,:email,:contactno,:message, :datep, :timep)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':name', $name, PDO::PARAM_STR);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':contactno', $contactno, PDO::PARAM_STR);
  $query->bindParam(':message', $message, PDO::PARAM_STR);
  $query->bindParam(':datep', $datep, PDO::PARAM_STR);
  $query->bindParam(':timep', $timep, PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    $msg = "Query Sent. We will contact you shortly";
    header("location:index.php");
  } else {
    $error = "Something went wrong. Please try again";
  }
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>

  <title>Contact Us Page</title>
  <!--Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <!--Custome Style -->
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <!--OWL Carousel slider-->
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <!--slick-slider -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!--bootstrap-slider -->
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <!--FontAwesome Font Style -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">

  <style>
    .errorWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #dd3d36;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #5cb85c;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
  </style>
</head>

<body>



  <!--Page Header-->
  <section class="page-header contactus_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Contact Us</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="#">Home</a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Page Header-->

  <!--Contact-us-->
  <section class="contact_us section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 style="color: black;">Get in touch using the form below</h3>
          <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
          <div class="contact_form gray-bg">
            <form method="post">
              <?php
              $email = $_SESSION['login'];
              $sql = "SELECT * FROM tblstudents WHERE email=:email ";
              $query = $dbh->prepare($sql);
              $query->bindParam(':email', $email, PDO::PARAM_STR);
              $query->execute();
              $results = $query->fetchAll(PDO::FETCH_OBJ);
              if ($query->rowCount() > 0) {
                foreach ($results as $results) {
                  // echo "<i class='fa-regular fa-user'></i>";
                  // echo htmlentities($result->fname);
                }
              } ?>
              <div class="form-group">
                <label class="control-label">Full Name <span>*</span></label>
                <input style="background-color:lightgray;" type="text" name="fullname" class="form-control white_bg" id="fullname" value="<?php echo htmlentities($results->fname); ?>" readonly>
              </div>
              <div class="form-group">
                <label class="control-label">Email Address <span>*</span></label>
                <input style="background-color:lightgray;" type="email" name="email" class="form-control white_bg" id="emailaddress" value="<?php echo htmlentities($results->email); ?>" readonly>
              </div>
              <div class="form-group">
                <label class="control-label">Phone Number <span>*</span></label>
                <input style="background-color:lightgray;" type="text" name="contactno" class="form-control white_bg" id="phonenumber" value="<?php echo htmlentities($results->phone); ?>" readonly maxlength="10" pattern="[0-9]+">
              </div>
              <div class="form-group">
                <label class="control-label">Message <span>*</span></label>
                <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Date Posted</label>
                <input style="background-color:lightgray;" type="date" name="datereported" class="form-control" id="date" aria-describedby="emailHelp" readonly />
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Time Posted</label>
                <input style="background-color:lightgray;" type="time" name="timereported" class="form-control" id="cutime1" value="<?php
                                                                                                                                    date_default_timezone_set("Africa/Nairobi");
                                                                                                                                    echo date('H:i:s'); ?>" aria-describedby="emailHelp" min="09:00" max="18:00" readonly />
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <button class="btn" type="submit" name="send" type="submit">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <h3>Contact Info</h3>
          <div class="contact_detail">
            <?php
            $pagetype = $_GET['type'];
            $sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            if ($query->rowCount() > 0) {
              foreach ($results as $result) { ?>
                <ul>
                  <li>
                    <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="contact_info_m"><?php echo htmlentities($result->Address); ?></div>
                  </li>
                  <li>
                    <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="contact_info_m"><a href="tel:61-1234-567-90"><?php echo htmlentities($result->EmailId); ?></a></div>
                  </li>
                  <li>
                    <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="contact_info_m"><a href="mailto:contact@exampleurl.com"><?php echo htmlentities($result->ContactNo); ?></a></div>
                  </li>
                </ul>
            <?php }
            } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Contact-us-->


  <!--Footer -->
  <?php include('Ffooter.php'); ?>
  <!-- /Footer-->

  <!--Back to top-->
  <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
  <!--/Back to top-->



  <!-- Scripts -->
  <script>
    const dateInput = document.getElementById("date");
    dateInput.value = formatDate();
    console.log(formatDate())

    function padTo2Digits(num) {
      return num.toString().padStart(2, "0");
    }

    function formatDate(date = new Date()) {
      return [
        date.getFullYear(),
        padTo2Digits(date.getMonth() + 1),
        padTo2Digits(date.getDate()),
      ].join('-');
    }

    const currentDate = new Date();
    const currentTime = currentDate.toLocaleTimeString();
    document.getElementById("cutime").value = currentTime;
  </script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/interface.js"></script>
  <!--Switcher-->
  <script src="assets/switcher/js/switcher.js"></script>
  <!--bootstrap-slider-JS-->
  <script src="assets/js/bootstrap-slider.min.js"></script>
  <!--Slider-JS-->
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

</body>
<?php
include "footer.php";
?>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->

</html>