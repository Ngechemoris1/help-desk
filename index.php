<?php
session_start();
error_reporting(0);
include('config.php');
?>

<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>home</title>

<!--BOOTSTRAP MAIN STYLES -->
<link href="asset/css/bootstrap.min.css" rel="stylesheet" />
<!--FONTAWESOME MAIN STYLE -->

<!--PRETTYPHOTO MAIN STYLE -->
<link href="asset/css/prettyPhoto.css" rel="stylesheet" />
<!--CUSTOM STYLE -->
<link href="asset/css/style.css" rel="stylesheet" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="style.css"> -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" /> -->


<?php
include "header.php";
?>
</div>
<style>
    body {
        background-image: url('img/techstaff.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body style="background-color: white;">
    <div>

        <div class="col-6 col-md-4 order-2 order-md-1">
            <form action="services.php" class="site-block-top-search">
                <input type="text" name="query" class="form-control border-0" placeholder="Search" value="<?php echo $search_query; ?>">
            </form>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-3">
                        <h2 style="color:white">Learn more about our technical support website </h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <img src="img/staffsupport.jpg" class="img-fluid rounded" width="250" height="250">
                    </div>
                    <br>
                    <div class="col-md-12 col-lg-5 justify-content-center">
                        <p style="color:white">Our techinal support team is here to help you with any challenge you may encounter with your machine from software complications to hardware complications Welcome</p>
                        <p><a href="faqs.php" class="btn btn-primary btn-sm">Frequently asked questions</a></p>
                    </div>
                </div>
            </div>
        </div>


        </p>
    </div>
    </div>
    </div>
    </div>

    <div>
        <section id="services-section">
            <div class="wrap-pad">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 " data-scrollreveal="enter top and move 100px, wait 0.5s">
                        <div class="text-center">
                            <h1><i class="fa fa-check small-icons bk-color-green"></i>Services</h1>
                            <p class="lead">
                                Our website is dedicated to offer you various kinds of services
                            </p>
                        </div>
                    </div>
                    <!-- ./ Heading div-->
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 ">
                        <div class="col-md-4 col-sm-6" data-scrollreveal="enter left and move 100px, wait 0.6s">
                            <div class="text-center">
                                <i class="fa fa-bolt icon-round bk-color-red"></i>
                                <h4>computer repairs </h4>
                                <p>
                                    We offr a wide range of computer repairs including virus removal , hardware repairs, Software installation and data recovery

                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6" data-scrollreveal="enter bottom and move 100px, wait 0.6s">
                            <div class="text-center">
                                <i class="fa fa-comments icon-round bk-color-black"></i>
                                <h4>24x7 Support</h4>
                                <p>
                                    We are also here to help you with any computer related questions you may have
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6" data-scrollreveal="enter right and move 100px, wait 0.6s">
                            <div class="text-center">
                                <i class="fa fa-desktop icon-round bk-color-light-blue"></i>
                                <h4>Software installations</h4>
                                <p>
                                    Our technical support offers a variety of software installations such us operating system installation,application installation,Driver installation and software updates
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6" data-scrollreveal="enter left and move 100px, wait 0.6s">
                            <div class="text-center">
                                <i class="fa fa-flask icon-round bk-color-green"></i>
                                <h4>Network Management</h4>
                                <p>
                                    Our technical team is ready to assist in any connectivity issues and security breaches that may arise in your machine.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6" data-scrollreveal="enter bottom and move 100px, wait 0.6s">
                            <div class="text-center">
                                <i class="fa fa-pencil icon-round bk-color-blue"></i>
                                <h4>Complains</h4>
                                <p>
                                    Our website is here to take all any issue that may arise including complaints.Feel free to access to write to us regarding any complains that may arise .
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6" data-scrollreveal="enter right and move 100px, wait 0.6s">
                            <div class="text-center">
                                <i class="fa fa-thumbs-up icon-round bk-color-brown"></i>
                                <h4>Service requisition</h4>
                                <p>
                                    Our site is here to assist in service requisition ranging from complaints, to connectivity issues, to faulty machines.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- ./ Content div-->
                </div>
            </div>
        </section>

    </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <!-- BOOTSTRAP SCRIPTS LIBRARY -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- PRETTYPHOTO  SCRIPTS  LIBRARY-->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!-- SCROLL REVEL  SCRIPTS  LIBRARY-->
    <script src="assets/js/scrollReveal.js"></script>
    <!-- CUSTOM SCRIPT-->
    <script src="assets/scripts/custom.js"></script>

</body>
<div>
    <?php
    include "footer.php";

    ?>

</html>