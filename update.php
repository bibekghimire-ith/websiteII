<?php 
ob_start();
session_start();
if($_SESSION['user']) {

} else {
	header('location:index.php');
	ob_end_flush();
}
	include "conn.php";
	$id = $_GET['id'];
	if(isset($_POST['stech'])) {
		$tech = $_POST['tech'];
		$query = mysqli_query($conn, "UPDATE `projects` SET `tech`='$tech' WHERE id=$id");
	}
		if(isset($_POST['stitle'])) {
		$title = $_POST['title'];
		$query = mysqli_query($conn, "UPDATE `projects` SET `title`='$title' WHERE id=$id");
	}
		if(isset($_POST['sdate'])) {
		$date = $_POST['date'];
		$query = mysqli_query($conn, "UPDATE `projects` SET `date`='$date' WHERE id=$id");
	}
		if(isset($_POST['scontent'])) {
		$content = $_POST['content'];
		$query = mysqli_query($conn, "UPDATE `projects` SET `content`='$content' WHERE id=$id");
	}
		if(isset($_POST['sgithub'])) {
		$github = $_POST['github'];
		$query = mysqli_query($conn, "UPDATE `projects` SET `github`='$github' WHERE id=$id");
	}
		if(isset($_POST['ssite'])) {
		$site = $_POST['site'];
		$query = mysqli_query($conn, "UPDATE `projects` SET `site`='$site' WHERE id=$id");
	}
		if(isset($_POST['simage'])) {
		// Get Image name
		$image = $_FILES['image']['name'];
		// Image file directory
		$target = "./static/images/projects/".basename($image);
		$query = mysqli_query($conn, "UPDATE `projects` SET `image`='$image' WHERE id=$id");
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  			$msg = "Project added Successfully";
  		} else {
  			$msg = "Failed to add Project";
  		}
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
	<h3>Update Project</h3>
	<hr>
	<form action="" method="POST">
		<label class="form-label">Title: </label>
		<input type="text" name="title" class="form-control">
		<input type="submit" name="stitle" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Date: </label>
		<input type="text" name="date" class="form-control">
		<input type="submit" name="sdate" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Content: </label>
		<textarea name="content" class="form-control"></textarea>
		<input type="submit" name="scontent" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Github: </label>
		<input type="text" name="github" class="form-control">
		<input type="submit" name="sgithub" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Site: </label>
		<input type="text" name="site" class="form-control">
		<input type="submit" name="ssite" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST">
		<label class="form-label">Technologies Used: </label>
		<input type="text" name="tech" class="form-control">
		<input type="submit" name="stech" class="btn btn-success" value="Update">
	</form><br>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="simage" class="btn btn-success" value="Update">
	</form><br><br><br>
</div>
 	
 
 </body>
 </html>