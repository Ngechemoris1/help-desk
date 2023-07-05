<?php
ini_set("display_errors", 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



?>
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {

	if (isset($_POST['submit'])) {
		$vehicletitle = $_POST['vehicletitle'];
		$routename = $_POST['routename'];
		$seats = $_POST['seats'];
		$drivername = $_POST['drivername'];
		$drivercontacts = $_POST['drivercontacts'];
		$drivermessage = $_POST['drivermessage'];
		$price = $_POST['price'];
		$freeseats = $_POST['freeseats'];
		$picktime = $_POST['picktime'];
		$vimage = $_FILES["img1"]["name"];


		move_uploaded_file($_FILES["img1"]["tmp_name"], "img/vehicleimages/" . $_FILES["img1"]["name"]);

		$sql = "INSERT INTO tblvehicles(VehicleTitle,routename,seats,drivername,drivercontacts,drivermessage,price,freeseats,picktime,Vimage) VALUES(:vehicletitle,:routename,:seats,:drivername,:drivercontacts,:drivermessage,:price,:freeseats,:picktime,:vimage)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':vehicletitle', $vehicletitle, PDO::PARAM_STR);
		$query->bindParam(':routename', $routename, PDO::PARAM_STR);
		$query->bindParam(':seats', $seats, PDO::PARAM_STR);
		$query->bindParam(':drivername', $drivername, PDO::PARAM_STR);
		$query->bindParam(':drivercontacts', $drivercontacts, PDO::PARAM_STR);
		$query->bindParam(':drivermessage', $drivermessage, PDO::PARAM_STR);
		$query->bindParam(':price', $price, PDO::PARAM_STR);
		$query->bindParam(':freeseats', $freeseats, PDO::PARAM_STR);
		$query->bindParam(':picktime', $picktime, PDO::PARAM_STR);
		$query->bindParam(':vimage', $vimage, PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
		if ($lastInsertId) {
			$msg = "Vehicle posted successfully";
		} else {
			$error = "Something went wrong. Please try again";
		}
	}




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

		<title>Admin Post Vehicle</title>

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

	<body>
		<?php include('includes/header.php'); ?>
		<div class="ts-main-content">
			<?php include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">

							<h2 class="page-title">Post A Vehicle</h2>

							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">Basic Info</div>
										<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>

										<div class="panel-body">
											<form method="post" class="form-horizontal" enctype="multipart/form-data">
												<div class="form-group">
													<label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="vehicletitle" class="form-control" required>
													</div>
													<label class="col-sm-2 control-label">Select Route<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<select class="selectpicker" name="routename" required>
															<option value=""> Select </option>
															<?php $ret = "select id,routeName from tblroutes";
															$query = $dbh->prepare($ret);
															//$query->bindParam(':id',$id, PDO::PARAM_STR);
															$query->execute();
															$results = $query->fetchAll(PDO::FETCH_OBJ);
															if ($query->rowCount() > 0) {
																foreach ($results as $result) {
															?>
																	<option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->routeName); ?></option>
															<?php }
															} ?>

														</select>
													</div>
												</div>

												<div class="hr-dashed"></div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Car Seats Capacity<span style="color:red">*</span></label>
													<div class="col-sm-10">
														<input type="number" class="form-control" name="seats" rows="3" required>
													</div>
												</div>

												<label class="col-sm-2 control-label">Driver Name<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="drivername" class="form-control" required>
												</div>
												<div class="hr-dashed"></div>

												<label class="col-sm-2 control-label">Driver Contacts<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="number" name="drivercontacts" class="form-control" required>
												</div>
												<br>

												<div class="hr-dashed"></div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Driver Message<span style="color:red">*</span></label>
													<div class="col-sm-10">
														<textarea class="form-control" name="drivermessage" rows="3" required></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Price<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="number" name="price" class="form-control" required>
													</div>

												</div>


												<div class="form-group">

													<label class="col-sm-2 control-label">Available Seats<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="number" name="freeseats" class="form-control" required>
													</div>
												</div>
												<div class="form-group">

													<label class="col-sm-2 control-label">Pick up Time<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="time" id="appt" name="picktime" class="form-control" required>
													</div>
												</div>
												<div class="hr-dashed"></div>


												<div class="form-group">
													<div class="col-sm-12">
														<h4><b>Upload Car image</b></h4>
													</div>
												</div>


												<div class="form-group">
													<div class="col-sm-4">
														Choose Image <span style="color:red">*</span><input type="file" name="img1" required>
													</div>

												</div>

												<div class="form-group">
													<div class="col-sm-8 col-sm-offset-2">
														<button class="btn btn-default" type="reset">Cancel</button>
														<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
													</div>
												</div>


										</div>
										<div class="hr-dashed"></div>
									</div>
								</div>
							</div>
						</div>
						< </form>
					</div>
				</div>
			</div>
		</div>



		</div>
		</div>



		</div>
		</div>
		</div>

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
	</body>

	</html>
<?php } ?>