<?php
session_start();
include "config.php";
include "header.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
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
        body {
            background: rgb(99, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        inputs {
            margin: 2px;
        }
    </style>
</head>

<body style="background-color: gray;">

    <!-- Lets update our profiles -->
    <?php if ($_SESSION['login']) { ?>

        <?php
        if (isset($_POST['submit'])) {
            $fname1 = $_POST['fullname'];
            // $regn = $_POST['regnumber'];
            // $emailn = $_POST['emailaddress'];
            $dep = $_POST['department'];
            // $course = $_POST['course'];
            $gender1 = $_POST['gender'];
            $idno = $_POST['idnumber'];
            $fon = $_POST['phone'];
            $job = $_POST['jobtitle'];
            $email = $_SESSION['login'];
            $pic = $_FILES["img1"]["name"];


            move_uploaded_file($_FILES["img1"]["tmp_name"], "img/images/" . $_FILES["img1"]["name"]);


            // $sql = "update tblstudents set fname=:fname,anumber=:regn, department=:dep,course=:course,gender=:gender,idnumber=:idno,phone=:fon WHERE email=:preemail ";

            $sql = "UPDATE tblstaff SET fullname = :fname1 ,numberid = :idno , department = :dep , jobtitle = :job , phone = :fon , gender = :gender1, profilep = :pic WHERE email = :email";
            $query = $dbh->prepare($sql);
            $query->bindParam(':fname1', $fname1, PDO::PARAM_STR);
            // $query->bindParam(':regn', $regn, PDO::PARAM_STR);
            // $query->bindParam(':emailn', $emailn, PDO::PARAM_STR);
            $query->bindParam(':dep', $dep, PDO::PARAM_STR);
            // $query->bindParam(':course', $course, PDO::PARAM_STR);
            $query->bindParam(':gender1', $gender1, PDO::PARAM_STR);
            $query->bindParam(':idno', $idno, PDO::PARAM_STR);
            $query->bindParam(':fon', $fon, PDO::PARAM_STR);
            $query->bindParam(':job', $job, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':pic', $pic, PDO::PARAM_STR);
            $query->execute();
            $msg = "Profile Updated Successfully";
            header("location: index.php");
            // // $lastInsertId = $dbh->lastInsertId();
            // if ($lastInsertId) {
            //     echo "<script>alert('Registration successfull. Now you can login');</script>";
            //     header('location:studentlogin.php');
            // } else {
            //     echo "<script>alert('Something went wrong. Please try again');</script>";
            // }
        }


        ?>

    <?php } ?>







    <?php if ($_SESSION['login']) { ?>

        <?php
        if (isset($_POST['submit'])) {
            $fname1 = $_POST['fullname'];
            $regn = $_POST['regnumber'];
            // $emailn = $_POST['emailaddress'];
            $dep = $_POST['department'];
            $course = $_POST['course'];
            $gender1 = $_POST['gender'];
            $idno = $_POST['idnumber'];
            $fon = $_POST['phone'];
            // $job = $_POST['jobtitle'];
            $email = $_SESSION['login'];

            // $pic = $_FILES["img1"]["name"];


            // move_uploaded_file($_FILES["img1"]["tmp_name"], "img/images" . $_FILES["img1"]["name"]);


            $sql = "UPDATE tblstudents SET fname = :fname1 , anumber = :regn , department = :dep , course = :course , gender = :gender1 , idnumber = :idno , phone= :fon WHERE email=:email ";

            // $sql = "UPDATE tblstaff SET fullname = :fname1 ,numberid = :idno , department = :dep , jobtitle = :job , phone = :fon , gender = :gender1 WHERE email = :email";
            $query = $dbh->prepare($sql);
            $query->bindParam(':fname1', $fname1, PDO::PARAM_STR);
            $query->bindParam(':regn', $regn, PDO::PARAM_STR);
            // $query->bindParam(':emailn', $emailn, PDO::PARAM_STR);
            $query->bindParam(':dep', $dep, PDO::PARAM_STR);
            $query->bindParam(':course', $course, PDO::PARAM_STR);
            $query->bindParam(':gender1', $gender1, PDO::PARAM_STR);
            $query->bindParam(':idno', $idno, PDO::PARAM_STR);
            $query->bindParam(':fon', $fon, PDO::PARAM_STR);
            // $query->bindParam(':job', $job, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            // $query->bindParam(':pic', $pic, PDO::PARAM_STR);
            $query->execute();
            $msg = "Profile Updated Successfully";
            header("location: index.php");
            // // $lastInsertId = $dbh->lastInsertId();
            // if ($lastInsertId) {
            //     echo "<script>alert('Registration successfull. Now you can login');</script>";
            //     header('location:studentlogin.php');
            // } else {
            //     echo "<script>alert('Something went wrong. Please try again');</script>";
            // }
        }


        ?>

    <?php } ?>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="container rounded bg-white mt-5 mb-5" style="background-color: darkgrey;">
        <div class="row">
            <?php if ($_SESSION['login']) { ?>

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

                <?php
                $email = $_SESSION['login'];
                $sql = "SELECT * FROM tblstaff WHERE email=:email ";
                $query = $dbh->prepare($sql);
                $query->bindParam(':email', $email, PDO::PARAM_STR);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_OBJ);
                if ($query->rowCount() > 0) {
                    foreach ($result as $result) {

                        // echo "<i class='fa-regular fa-user'></i>";
                        // echo htmlentities($result->fullname);
                    }
                } ?>



            <?php } else { ?>

                <script>
                    alert("You are not logged in");
                </script>

            <?php } ?>
            <div class="col-md-3 border-right">

                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"> <?php echo htmlentities($result->fullname); ?> <?php echo htmlentities($results->fname); ?> </span><span class="text-black-50"></span><span><?php echo htmlentities($results->email); ?> <?php echo htmlentities($result->email); ?> </span></div>
                <!-- <form method="post">
                    <label for="exampleInputPassword1">Change Profile Picture</label>
                    <input type="file" name="img1" class="form-control" id="exampleInputPassword1" placeholder=" " />
                    <button class="btn btn-success" name="changeprofile">UPDATE PROFILE picture</button>

                </form> -->


            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form method="post" style="padding: 30px; width: 80%" name="signup" onSubmit="return valid();">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo htmlentities($result->fullname); ?> <?php echo htmlentities($results->fname); ?>" />
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Registration Number(student)</label>
                            <input type="text" name="regnumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" <?php echo htmlentities($results->anumber); ?>" />
                            <small id=" emailHelp" class="form-text text-muted"></small>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Course(student)</label>
                            <input type="text" name="course" class="form-control" id="exampleInputPassword1" placeholder="<?php echo htmlentities($results->course); ?>" />
                        </div>




                        <div class="form-group">
                            <label for="exampleInputPassword1">Gender</label>
                            <select name="gender" class="form-select" aria-label="Default select example">

                                <option selected><label for="exampleInputPassword1"><?php echo htmlentities($result->gender); ?> <?php echo htmlentities($results->gender); ?></label></option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">ID Number</label>
                            <input type="number" name="idnumber" class="form-control" id="exampleInputPassword1" placeholder="<?php echo htmlentities($result->numberid); ?> <?php echo htmlentities($results->idnumber); ?>""  />
                        </div>

                        <div class=" form-group">
                            <label for="exampleInputPassword1">Phone Number</label>
                            <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="<?php echo htmlentities($result->phone); ?> <?php echo htmlentities($results->phone); ?>""  />
                        </div>
                        <div class=" form-group">
                            <label for="exampleInputPassword1">Job Title (Tech)</label>
                            <input type="text" name="jobtitle" class="form-control" id="exampleInputPassword1" placeholder="<?php echo htmlentities($result->jobtitle); ?> " />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Department</label>
                            <select class="form-select" aria-label="Default select example" id="dep" name="department">
                                <option selected><?php echo htmlentities($results->department); ?></option>
                                <!-- $email = $_SESSION["login"]; -->
                                <?php $ret = "select * from tblcourse";
                                $query = $dbh->prepare($ret);
                                // $query->bindParam(':email',$email, PDO::PARAM_STR);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result1) {
                                ?>
                                        <option><?php echo htmlentities($result1->course); ?></option>
                                <?php }
                                } ?>

                            </select><br>

                        </div>
                        <div class=" form-group">

                        </div>
                        <div class=" form-check">
                            <!-- <input type="checkbox" style="margin:1px" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                        </div>

                        <button type="submit" id="submit" class="btn btn-primary" name="submit" value="">UPDATE PROFILE</button>
                    </form>
                    <!-- <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div> -->
                </div>
            </div>
        </div>
    </div>

    <script src="" async defer></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
<?php
if (isset($_POST['changeprofile'])) {

    $pic = $_FILES["img1"]["name"];
    $email1 = $_SESSION['login'];


    // move_uploaded_file($_FILES["image"]["tmp_name"], "img/images/" . $_FILES["image"]["name"]);
    move_uploaded_file($_FILES["img1"]["tmp_name"], "img/" . $_FILES["img1"]["name"]);

    $sql = "INSERT INTO tblprofile(profilepicture,emailnumber) VALUES(:pic,:email1)";
    $query = $dbh->prepare($sql);

    $query->bindParam(':pic', $pic, PDO::PARAM_STR);
    $query->bindParam(':email1', $email1, PDO::PARAM_STR);

    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        $msg = "image uploaded successfully";
    } else {
        $error = "Something went wrong. Please try again";
    }
}
?>

<?php
include 'footer.php';
?>

</html>