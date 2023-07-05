<?php
session_start();
include "config.php";
include "header.php";
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <style>
        #services {}

        #services .services-top {
            padding: 70px 0 50px;
        }

        #services .services-list {
            padding-top: 50px;
        }

        .services-list .service-block {
            margin-bottom: 25px;
        }

        .services-list .service-block .ico {
            font-size: 38px;
            float: left;
        }

        .services-list .service-block .text-block {
            margin-left: 58px;
        }

        .services-list .service-block .text-block .name {
            font-size: 20px;
            font-weight: 900;
            margin-bottom: 5px;
        }

        .services-list .service-block .text-block .info {
            font-size: 16px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        .services-list .service-block .text-block .text {
            font-size: 12px;
            line-height: normal;
            font-weight: 300;
        }

        .highlight {
            color: #2ac5ed;
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: white;">
    <div>
        <!-- <a class="btn btn-secondary" style="float: right; margin:10px;" href="#form">Scroll down</a> -->
        <a href="#form"><i class="bi bi-arrow-down" style="float: right; margin:10px;">scroll down to request service</i></a>
    </div>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <div class="container bootstrap snippets bootdey">
        <fieldset>
            <section id="services" class="current">
                <div class="services-top">
                    <div class="container bootstrap snippets bootdey">
                        <div class="row text-center">
                            <div class="col-sm-12 col-md-12 col-md-12">
                                <h2>What We Offer</h2>
                                <h2 style="font-size: 60px;line-height: 60px;margin-bottom: 20px;font-weight: 900;"></h2>
                                <p>We are <span class="highlight">experienced</span> and <span class="highlight">dedicated</span> to provide ontime services.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-1 col-sm-12 col-md-12 col-md-10">
                                <div class="services-list">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4 col-md-4">
                                            <div class="service-block" style="visibility: visible;">
                                                <div class="ico fa fa-magic highlight"></div>
                                                <div class="text-block">
                                                    <div class="name">Network Management</div>
                                                    <div class="info">Installation and Repairs</div>
                                                    <div class="">
                                                        The following are some of the services that can be provided as part of network management installation and repairs:

                                                        <ul>
                                                            <li>Fault detection and resolution: This involves identifying and fixing problems with the network, such as slow performance, connectivity issues, and security breaches.</li>
                                                            <li>Performance monitoring: This involves tracking the performance of the network to ensure that it is meeting the needs of the organization.
                                                            </li>
                                                            <li>Security management: This involves implementing and maintaining security measures to protect the network from unauthorized access, viruses, and other threats.
                                                            </li>
                                                            <li>Configuration management: This involves tracking the configuration of the network to ensure that it is consistent and up-to-date.</li>
                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-md-4">
                                            <div class="service-block" style="visibility: visible;">
                                                <div class="ico fa fa-code highlight"></div>
                                                <div class="text-block">
                                                    <div class="name">Computer Repairs</div>

                                                    <div>If you are experiencing problems with your computer, we encourage you to contact our technical support team. We will be happy to help you diagnose the problem and find the best solution for your needs.</div>

                                                    Here are some of the benefits of using our computer repair services:
                                                    <ul>
                                                        <li>Fast and reliable service</li>
                                                        <li>Competitive prices</li>
                                                        <li>Expert technicians</li>
                                                        <li>Convenient location</li>
                                                        <li>Free estimates</li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-md-4">
                                            <div class="service-block" style="visibility: visible;">
                                                <div class="ico fa fa-pencil highlight"></div>
                                                <div class="text-block">
                                                    <div class="name">Software Installations</div>

                                                    <div class="">
                                                        Our technical support system offers a variety of software installation services, including:
                                                        <ul>
                                                            <li>Operating system installation</li>
                                                            <li>Application installation</li>
                                                            <li>Driver installation</li>
                                                            <li>Software updates</li>
                                                            <li>Software removal</li>
                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </fieldset>
    </div>
    <div align="center">

        <form id="form" method="POST" style="margin: 30px; width: 30%; background-color:lightcyan; " name="signup">
            <h2>Request Service</h2>


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







            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="margin-top: 0px;" class="rounded-circle mt-5" width="100px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"> <?php echo htmlentities($result->fullname); ?> <?php echo htmlentities($results->fname); ?> </span><span class="text-black-50"></span><span><?php echo htmlentities($results->email); ?> <?php echo htmlentities($result->email); ?> </span> <span class="font-weight-bold"></span> Department: <?php echo htmlentities($results->department); ?> <?php echo htmlentities($result->department); ?> </span></div>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date Reported</label>
                <input style="width: 70%; background-color:lightcyan;" type="date" name="datereported" class="form-control" id="date" aria-describedby="emailHelp" readonly />
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Time Reported</label>
                <input style="width: 70%; background-color:lightcyan;" type="time" name="timereported" class="form-control" id="cutime1" value="<?php
                                                                                                                                                date_default_timezone_set("Africa/Nairobi");
                                                                                                                                                echo date('H:i:s'); ?>" aria-describedby="emailHelp" min="09:00" max="18:00" readonly />
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Nature of your Problem</label>
                <textarea style="margin: 5px; height:200px; width: 70%; margin:10px" type="text" name="problem" class="form-control" id="myInput" placeholder="Describe your device type and the type of problem you encountered" /></textarea>
            </div>

            <?php if ($_SESSION['login']) { ?>
                <button style="width: 70%; margin:10px" type=" submit" id="submit" class="btn btn-primary" name="submit" value="signUp">SUBMIT</button>
            <?php } else { ?>
                <a href="studentlogin.php" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal"><strong><span style="color: #2ac5ed;">LOGIN</span> to request any service</strong></a>


            <?php } ?>
        </form>


        <?php
        if (isset($_POST['submit'])) {
            $rdate = $_POST['datereported'];
            $rtime = $_POST['timereported'];
            $rproblem = $_POST['problem'];
            // $email1 = $_SESSION['login'];
            $email = $_SESSION['login'];
            $sql = "INSERT INTO  tblservice(datereported,timereported,problem,email) VALUES(:rdate,:rtime,:rproblem,:email)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':rdate', $rdate, PDO::PARAM_STR);
            $query->bindParam(':rtime', $rtime, PDO::PARAM_STR);
            $query->bindParam(':rproblem', $rproblem, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            // $query->bindParam(':email1', $_SESSION['login'], PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                // $msg = "Your Request Service  Successfully submited";
                echo "<script>alert(' Your Request Service  Successfully submited');</script>";
                header('location:report.php');
            } else {
                echo "<script>alert('Something went wrong. Please try again');</script>";
            }
        }


        ?>







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
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>


</body>
<?php
include 'footer.php';
?>

</html>