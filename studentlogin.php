<?php
session_start();
include "config.php";
include 'header.php';
?>




<?php
try {
  if (isset($_POST['emailid']) && isset($_POST['password'])) {
    $emailn = $_POST['emailid'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM tblstudents WHERE email=:emailn and password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':emailn', $emailn, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);


    if ($query->rowCount() > 0) {
      $_SESSION['login'] = $_POST['emailid'];
      // $_SESSION['fullname'] = $results->fname;
      // $currentpage = $_SERVER['REQUEST_URI'];
      // echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
      header('location:index.php');
    } else {

      echo "<script>alert('Invalid Details');</script>";
    }
  }
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
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
    <h2>User Login</h2>
    
      <form method="post" style="padding: 30px; width: 30%" action="">

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" name="emailid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Number" required />
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="myInput" placeholder="Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Your password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
          <input type="checkbox" onclick="myFunction()">Show Password

        </div>

        <div class="form-check">
          <!-- <input type="checkbox" style="margin:1px" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
        </div>
        <small id="emailHelp" class="form-text text-muted">Dont have an account, <a href="studentregister.php">CLICK HERE</a> to register</small><br />
        <button type="submit" name="login" class="btn btn-primary">login</button>
      </form>
    </div>
    

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
    </script>

    <footer style="height:20px;">
      <?php
      include 'footer.php';
      ?>
    </footer>
</body>



</html>