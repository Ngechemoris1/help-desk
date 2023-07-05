<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {



?>

    <!doctype html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title>services</title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Sandstone Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="css/fileinput.min.css">
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <!-- Admin Stye -->
        <link rel="stylesheet" href="css/style.css">
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

    <body style="display: flex;">
        <?php include('includes/header.php'); ?>

        <div class="ts-main-content">
            <?php include('includes/leftbar.php'); ?>
            <div class="content-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">

                            <h2 class="page-title">Service Details</h2>

                            <!-- Zero Configuration Table -->
                            <div class="panel panel-default">
                                <div class="panel-heading">Service Info</div>
                                <div class="panel-body">


                                    <div id="print">
                                        <table border="1" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">

                                            <tbody>

                                                <?php
                                                $bid = intval($_GET['bid']);

                                                $sql = 'SELECT * FROM tblstudents s
											JOIN tblservice t ON s.email = t.email where t.id=:bid';
                                                $query = $dbh->prepare($sql);
                                                $query->bindParam(':bid', $bid, PDO::PARAM_STR);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) {                ?>
                                                        <h3 style="text-align:center; color:red"><?php echo htmlentities($result->fname); ?> Request Details </h3>

                                                        <tr>
                                                            <th colspan="4" style="text-align:center;color:blue">User Details</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Booking No.</th>
                                                            <td>#<?php echo htmlentities($result->BookingNumber); ?></td>
                                                            <th>Name</th>
                                                            <td><?php echo htmlentities($result->fname); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email Id</th>
                                                            <td><?php echo htmlentities($result->email); ?></td>
                                                            <th>Contact No</th>
                                                            <td><?php echo htmlentities($result->phone); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Registration number(student)</th>
                                                            <td><?php echo htmlentities($result->anumber); ?></td>
                                                            <th>National ID Number</th>
                                                            <td><?php echo htmlentities($result->idnumber); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Department</th>
                                                            <td colspan="3"><?php echo htmlentities($result->department); ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th colspan="4" style="text-align:center;color:blue">Request Details</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Date Reported</th>

                                                            <td><?php echo htmlentities($result->datereported); ?></td>
                                                            <th>Time Reported</th>
                                                            <td><?php echo htmlentities($result->timereported); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Request</th>
                                                            <td><?php echo htmlentities($result->problem); ?></td>
                                                            <th> Date Checked</th>
                                                            </th>
                                                            <td><?php echo htmlentities($result->datechecked); ?></td>
                                                        </tr>
                                                        <!--  -->
                                                        <tr>
                                                            <th>Request Status</th>
                                                            <td><?php
                                                                if ($result->Status == 0) {
                                                                    echo htmlentities('Not Solved yet');
                                                                } else if ($result->Status == 1) {
                                                                    echo htmlentities('Confirmed');
                                                                } else {
                                                                    echo htmlentities('Cancelled');
                                                                }
                                                                ?></td>
                                                            <th>Comments</th>
                                                            <td><?php echo htmlentities($result->comments); ?></td>
                                                        </tr>

                                                        <?php if ($result->status == 0) { ?>
                                                            <tr>
                                                                <td style="text-align:center" colspan="4">
                                                                    <!-- <a href="bookig-details.php?aeid=<?php echo htmlentities($result->id); ?>" onclick="return confirm('Do you really want to send your solution')" class="btn btn-primary">Confirm and exit</a> -->


                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                <?php $cnt = $cnt + 1;
                                                    }
                                                } ?>

                                            </tbody>
                                            <form action="" method="post">
                                        </table>




                                        <table border="1" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">

                                            <tbody>


                                                <tr>
                                                    <th colspan="4" style="text-align:center;color:blue">Provide Feedback</th>
                                                </tr>
                                                <tr>
                                                    <th>Date Checked</th>

                                                    <td><input type="date" name="datec" id="date" readonly></td>
                                                    <th>Time Checked</th>
                                                    <td><input type="time" name="timec" value="<?php
                                                                                                date_default_timezone_set("Africa/Nairobi");
                                                                                                echo date('H:i:s'); ?>" aria-describedby="emailHelp" min="09:00" max="18:00" readonly /></td>
                                                </tr>

                                                <tr>
                                                    <th>Comments</th>
                                                    <td><textarea name="comment" id="" cols="30" rows="10" placeholder="<?php echo htmlentities($result->comments); ?>"></textarea></td>
                                                    <th>save</th>
                                                    <td>
                                                        <button name="feedback" class="btn btn-primary">Confirm Feedback</button>
                                                        <a href="newservices.php" onclick="return confirm('Do you really want to Cancel this request')" class="btn btn-danger"> Cancel Request</a>


                                                    </td>


                                                </tr>
                                                <tr>



                                                </tr>




                                            </tbody>


                                            </form>



                                            <form method="post">
                                                <input name="Submit2" type="submit" class="txtbox4" value="Print" onClick="return f3();" style="cursor: pointer;" />
                                            </form>


                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
if (isset($_POST['feedback'])) {
    $datec =  $_POST['datec'];
    $timec =  $_POST['timec'];
    $comments =  $_POST['comment'];
    $st = 1;
    $bid = intval($_GET['bid']);
    $sql  = "UPDATE tblservice SET datechecked=:datec, timechecked =:timec,comments=:comments,status=:st where id =:bid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':datec', $datec, PDO::PARAM_STR);
    $query->bindParam(':timec', $timec, PDO::PARAM_STR);
    $query->bindParam(':comments', $comments, PDO::PARAM_STR);
    $query->bindParam(':st', $st, PDO::PARAM_STR);
    $query->bindParam(':bid', $bid, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        // $msg = "successful";
        header('location:newservices.php');

        exit;
    }
}


            ?>

            <!-- Loading Scripts -->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap-select.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.dataTables.min.js"></script>
            <script src="js/dataTables.bootstrap.min.js"></script>
            <script src="js/Chart.min.js"></script>
            <script src="js/fileinput.js"></script>
            <script src="js/chartData.js"></script>
            <script src="js/main.js"></script>
            <script language="javascript" type="text/javascript">
                function f3() {
                    window.print();
                }
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
    </body>

    </html>
<?php } ?>