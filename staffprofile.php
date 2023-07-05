<?php
session_start();
include "config.php";
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

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
  <div align="center">
    <h2>My Profile</h2>

    <!-- The current information filled in during registration resides here. Then information to be added goes bellow -->

    <form method="post" style="padding: 30px; width: 30%">
      <div class="form-group">
        <label for="exampleFormControlSelect1">Gender</label>
        <select name="gender" class="form-control" id="exampleFormControlSelect1">
          <option>Select your gender</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Department</label>
        <select name="department" class="form-control" form-control-lg id="exampleFormControlSelect1">
          <option title="click here to select your department">
            Department
          </option>
          <option>Department of Education</option>
          <option>Department of Mechanical Engineering</option>
          <option>Department of Electrical Engineering.</option>
          <option>Computer Studies Department</option>
        </select>
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1"> Phone</label>
        <input name="phone" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone number" />
      </div>

      <div class="form-check">
        <!-- <input type="checkbox" style="margin:1px" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
      </div>

      <br />
      <button type="submit" class="btn btn-primary" name="updateprofile">
        Update Profile
      </button>
    </form>
  </div>

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>