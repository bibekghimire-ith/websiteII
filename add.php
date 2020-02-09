<?php 
ob_start();
session_start();
	include "conn.php";
if ($_SESSION['user']) {

} else {
	header('location:index.php');
	ob_end_flush();
}

	$msg = "";
	if(isset($_POST['submit'])) {
		$title = $_POST['title'];
		$date = $_POST['date'];
		$content = $_POST['content'];
		$github = $_POST['github'];
		$site = $_POST['site'];
		$tech = $_POST['tech'];
		// Get Image name
		$image = $_FILES['image']['name'];
		// Image file directory
		$target = "./static/images/projects/".basename($image);

		
		$query = mysqli_query($conn, "INSERT INTO `projects` (`title`, `date`, `content`, `github`, `site`, `tech`, `image`) VALUES ('$title', '$date', '$content', '$github', '$site', '$tech', '$image')");
	
  		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  			$msg = "Project added Successfully";
  		} else {
  			$msg = "Failed to add Project";
  		}

		header('location:mydashboard.php');
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
	<h3>Add Project</h3>
	<hr>
	<form action="" method="POST" enctype="multipart/form-data">
		<label class="form-label">Title: </label>
		<input type="text" name="title" class="form-control" required="required">
		<label class="form-label">Date: </label>
		<input type="text" name="date" class="form-control" required="required">
		<label class="form-label">Content: </label>
		<textarea name="content" class="form-control" required="required"></textarea>
		
		<label class="form-label">Github: </label>
		<input type="text" name="github" class="form-control">
		<label class="form-label">Site: </label>
		<input type="text" name="site" class="form-control">
		<label class="form-label">Technologies Used: </label>
		<input type="text" name="tech" class="form-control" required="required">
		<input type="file" name="image"><br>
		<input type="submit" name="submit" class="btn btn-success" value="Submit">
	</form>
</div>
 	
 
 </body>
 </html>