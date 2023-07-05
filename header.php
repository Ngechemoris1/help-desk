<?php
// include "config.php";
// session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <style>
    body {
      margin: 0;
      font-family: Arial;
      top: 0px;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .active {
      background-color: #04aa6d;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 17px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .topnav a:hover,
    .dropdown:hover .dropbtn {
      background-color: #555;
      color: white;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
      color: black;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    @media screen and (max-width: 600px) {

      .topnav a:not(:first-child),
      .dropdown .dropbtn {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }

      .topnav.responsive .dropdown {
        float: none;
      }

      .topnav.responsive .dropdown-content {
        position: relative;
      }

      .topnav.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
      }
    }
  </style>
</head>

<body style="text-align: center; background-color:#ddd; ">

  <center>
    <div class="topnav" id="myTopnav">
      <div style="float: right; margin: 10px;">
        <?php if ($_SESSION['login'] == 0) { ?>
          <!-- <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="report.php">RE</a> -->
          <a href="studentlogin.php"> LOGIN/REGISTER</a>
          <!-- <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="help.php">HELP ME OUT</a> -->
        <?php } ?>
      </div>
      
      <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="index.php" class="active">Home</a>
      <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="services.php">SERVICES</a>
      <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="about.php">ABOUT US</a>
      <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="faqs.php">FAQS</a>
      <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="javascript:void(0);" style="font-size: 15px" class="icon" onclick="myFunction()">&#9776;</a>

      <?php if ($_SESSION['login']) { ?>
        <div style="margin-right: 20px; margin-top:10px;margin-bottom:10px; text-transform: uppercase;" class="dropdown">

          <button class="dropbtn" style="text-transform: uppercase;">

            <?php
            $email = $_SESSION['login'];
            $sql = "SELECT fname FROM tblstudents WHERE email=:email ";
            $query = $dbh->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() > 0) {
              foreach ($results as $result) {
                // echo "<i class='fa-regular fa-user'></i>";

              }
              echo htmlentities($result->fname);
            } ?>

            <?php
            $email = $_SESSION['login'];
            $sql = "SELECT * FROM tblstaff WHERE email=:email ";
            $query = $dbh->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() > 0) {
              foreach ($results as $result) {

                // echo "<i class='fa-regular fa-user'></i>";
                echo htmlentities($result->fullname);
              }
              // echo htmlentities("PROFILE");
            }


            ?>


            <i class="fa fa-caret-down"></i>
          </button>
          <ul style="background-color: #333;">

            <div class="dropdown-content">
              <li> <a href="profile.php">VIEW PROFILE</a></li>
              <li><a href="post-testimonial.php">POST A COMMENT</a></li>
              <li><a href="contact-us.php">CONTACT US</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
            </div>
          <?php } ?>
          </ul>
        </div>



        <?php if ($_SESSION['login']) { ?>
          <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="report.php">REPORT</a>
          <a href="logout.php" style="float: right; margin: 10px;"> LOGOUT</a>
          <!-- <a style=" margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="help.php">HELP ME OUT</a> -->
        <?php } ?>



    </div>
  </center>



  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
</body>

</html>