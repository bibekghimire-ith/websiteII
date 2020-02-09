<?php 
ob_start();
session_start();
	include "conn.php";
if ($_SESSION['user']) {

} else {
	header('location:index.php');
	ob_end_flush();
}
	if(isset($_POST['sname'])) {
		$name = $_POST['name'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `name`='$name' WHERE id=1");

		// header('location:mydashboard.php');
	}
	if(isset($_POST['saddress'])) {
		$address = $_POST['address'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `address`='$address' WHERE id=1");

	}
	if(isset($_POST['semail'])) {
		$email = $_POST['email'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `email`='$email' WHERE id=1");

	}
	if(isset($_POST['seducation'])) {
		$education = $_POST['education'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `education`='$education' WHERE id=1");

	}
	if(isset($_POST['sprogramming'])) {
		$programming = $_POST['programming'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `programming`='$programming' WHERE id=1");

	}
	if(isset($_POST['shardware'])) {
		$hardware = $_POST['hardware'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `hardware`='$hardware' WHERE id=1");

	}
	if(isset($_POST['sweb'])) {
		$web = $_POST['web'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `web`='$web' WHERE id=1");

	}
	if(isset($_POST['sos'])) {
		$os = $_POST['os'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `os`='$os' WHERE id=1");

	}
	if(isset($_POST['sothers'])) {
		$others = $_POST['others'];
		$query = mysqli_query($conn, "UPDATE `biodata` SET `others`='$others' WHERE id=1");
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title>Bibek Ghimire Portfolio</title>
 	<link rel="stylesheet" type="text/css" href="./static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./static/css/">
	<script type="text/javascript" src="./static/js/bootstrap.js"></script>
	<script type="text/javascript" src="./static/js/jquery.js"></script>
	<script type="text/javascript" src="./static/js/clock.js"></script>
 </head>
 <body>


<div class="container">
	<br>
	<a href="mydashboard.php" class="btn btn-secondary">Go Back</a>
	<h3>Update Bio Data</h3>
	<hr>
<form action="" method="POST">
		<label class="form-label">Name: </label>
		<input type="text" name="name" class="form-control" required="required">
		<input type="submit" name="sname" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Address: </label>
		<input type="text" name="address" class="form-control" required="required">
		<input type="submit" name="saddress" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Email: </label>
		<input type="text" name="email" class="form-control" required="required">
		<input type="submit" name="semail" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Educational Qualification: </label>
		<input type="text" name="education" class="form-control" required="required">
		<input type="submit" name="seducation" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Programming Languages: </label>
		<input type="text" name="programming" class="form-control" required="required">
		<input type="submit" name="sprogramming" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Hardware Technologies: </label>
		<input type="text" name="hardware" class="form-control" required="required">
		<input type="submit" name="shardware" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Web Development: </label>
		<input type="text" name="web" class="form-control" required="required">
		<input type="submit" name="sweb" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label type="text" class="form-label">Operating System: </label>
		<input type="text" name="os" class="form-control" required="required">
		<input type="submit" name="sos" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Other Technologies: </label>
		<input type="text" name="others" class="form-control" required="required">
		<input type="submit" name="sothers" class="btn btn-success" value="Update">
	</form>
	<br><br><br>
</div>
 	
 
 </body>
 </html>