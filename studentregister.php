<?php
session_start();
include "config.php";
include "header.php";
?>



<?php
if (isset($_POST['register'])) {
  $fname = $_POST['fname'];
  $regn = $_POST['regnumber'];
  $emailn = $_POST['emailid'];
  $dep = $_POST['dep'];
  $password = md5($_POST['password']);
  // $vimage = $_FILES["img1"]["name"];



  // move_uploaded_file($_FILES["img1"]["tmp_name"], "img/images/" . $_FILES["img1"]["name"]);

  // move_uploaded_file($_FILES["img1"]["tmp_name"], "img/vehicleimages/" . $_FILES["img1"]["name"]);





  $sql = "INSERT INTO  tblstudents(fname,anumber,email,department,password) VALUES(:fname,:regn,:emailn,:dep,:password)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':fname', $fname, PDO::PARAM_STR);
  $query->bindParam(':regn', $regn, PDO::PARAM_STR);
  $query->bindParam(':emailn', $emailn, PDO::PARAM_STR);
  $query->bindParam(':dep', $dep, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  // $query->bindParam(':vimage', $vimage, PDO::PARAM_STR);



  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    echo "<script>alert('Registration successfull. Now you can login');</script>";
    header('location:studentlogin.php');
  } else {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}


?>

















<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
  input {
    margin: 1px;
  }
</style>

<body style="background-color: white;">
  <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
  <div align="center">
    <h2>User Registrtation</h2>
    <form method="post" style="padding: 30px; width: 30%" name="signup" onSubmit="return valid();">
      <div class="form-group">
        <label for="exampleInputEmail1">Full Name</label>
        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full name" required />
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Registration Number</label>
        <input type="text" name="regnumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter registration number" required />
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="emailid" type="email" class="form-control" id="emailid" aria-describedby="emailHelp" placeholder="Enter email" onBlur="checkAvailability()" required />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Department</label>
        <select class="form-select" aria-label="Default select example" id="dep" name="dep">
          <?php $ret = "select * from tblcourse";
          $query = $dbh->prepare($ret);
          //$query->bindParam(':id',$id, PDO::PARAM_STR);
          $query->execute();
          $results = $query->fetchAll(PDO::FETCH_OBJ);
          if ($query->rowCount() > 0) {
            foreach ($results as $result) {
          ?>
              <option><?php echo htmlentities($result->course); ?></option>
          <?php }
          } ?>

        </select><br>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="myInput" placeholder="Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Your password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" name="confirmpassword" class="form-control" id="myInput" placeholder="confirm Password" required />
      </div>
      <div class="form-check">
        <input type="checkbox" onclick="myFunction()">Show Password
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputEmail1">Upload your profile picture</label>
        <input name="img1" type="file" class="form-control" aria-describedby="emailHelp" required />
      </div> -->

      <small id="emailHelp" class="form-text text-muted">Allready have an account, <a href="studentlogin.php">CLICK HERE</a> to login</small><br />
      <button type="submit" id="submit" class="btn btn-primary" name="register" value="signUp">Register</button>
    </form>
  </div>

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>



  <script>
    function myFunction() {
      let x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }


    function checkAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "check_availability.php",
        data: 'emailid=' + $("#emailid").val(),
        type: "POST",
        success: function(data) {
          $("#user-availability-status").html(data);
          $("#loaderIcon").hide();
        },
        error: function() {}
      });
    }
  </script>
  <script type="text/javascript">
    function valid() {
      if (document.signup.password.value != document.signup.confirmpassword.value) {
        alert("Password and Confirm Password Field do not match  !!");
        document.signup.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>



</body>
<?php
include 'footer.php';
?>

</html>