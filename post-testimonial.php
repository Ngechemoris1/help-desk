<?php
session_start();
error_reporting(0);
include('config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else {
  if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_SESSION['login'];
    
    $contactno = $_POST['contactno'];
    $datep = $_POST["datereported"];
    $timep = $_POST["timereported"];
    $testimonoial = $_POST['testimonial'];
   
    $sql = "INSERT INTO  tbltestimonial(fullname, UserEmail, phone, datereported, timereported, Testimonial) VALUES(:name, :email, :contactno, :datep, :timep, :testimonoial)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':contactno', $contactno, PDO::PARAM_STR);
    // $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->bindParam(':datep', $datep, PDO::PARAM_STR);
    $query->bindParam(':timep', $timep, PDO::PARAM_STR);
    $query->bindParam(':testimonoial', $testimonoial, PDO::PARAM_STR);
    // $query->bindParam(':email', $email, PDO::PARAM_STR);

    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {

      echo " <script>alert('Successfuly sent.')</script>";
    } else {
    }
  }
?>
  <!DOCTYPE HTML>
  <html lang="en">

  <head>

    <title>Post comment</title>
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

    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
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



    <!--Header-->
    <?php include('header.php'); ?>
    <!-- /Header -->
    <!--Page Header-->
    <section class="page-header profile_page">
      <div class="container">
        <div class="page-header_wrap">
          <div class="page-heading">
            <h1>Post Comment</h1>
          </div>
          <ul class="coustom-breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Post Comment</li>
          </ul>
        </div>
      </div>
      <!-- Dark Overlay-->
      <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <?php
    $useremail = $_SESSION['login'];
    $sql = "SELECT * from tblstudents where email=:useremail";
    $query = $dbh->prepare($sql);
    $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    if ($query->rowCount() > 0) {
      foreach ($results as $result) { ?>
        <section class="user_profile inner_pages">
          <div class="container">
            <div class="user_profile_info gray-bg padding_4x4_40">
              <div class="upload_user_logo"> <img src="assets/images/dealer-logo.jpg" alt="image">
              </div>

              <div class="dealer_info">
                <h5><?php echo htmlentities($result->fname); ?></h5>
                <p><?php echo htmlentities($result->email); ?><br>
                  <?php echo htmlentities($result->City); ?>&nbsp;<?php echo htmlentities($result->department);
                                                                }
                                                              } ?></p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-lg-8">

                <div class="col-md-6 col-lg-10">
                  <div class="profile_wrap">
                    <h5 class="uppercase underline">Post a Testimonial</h5>
                    <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
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
                        <label class="control-label">Testimonail</label>

                        <textarea class="form-control white_bg" name="testimonial" rows="4" cols="100" required=""></textarea>
                      </div>


                      <div class="form-group">
                        <button type="submit" name="submit" class="btn">Save <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!--/Profile-setting-->

        <<!--Footer -->
          <?php include('footer.php'); ?>
          <!-- /Footer-->

          <!--Back to top-->
          <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
          <!--/Back to top-->




          <!-- Scripts -->
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

  </html>
<?php } ?>