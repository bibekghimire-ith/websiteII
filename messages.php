<?php 
ob_start();
session_start();
	include "conn.php";
	if($_SESSION['user']) {

	} else {
		header('location:index.php');
		ob_end_flush();
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


 	<header class="jumbotron"><h2 class="text-center"><b>My Dashboard</b></h2></header>

 	<div class="container justify-content-center">
 		<a href="./mydashboard.php" class="btn btn-secondary float-center">My Dashboard</a>
 		<a href="./add.php" class="btn btn-primary">Add Projects</a>
 		<a href="./index.php" class="btn btn-secondary float-center">Home</a>
 		<a href="./updatecv.php" class="btn btn-secondary float-center">Update Bio Data</a>
 		
 		<a href="logout.php" class="btn btn-danger float-right">Logout</a>
 		<br><br>
 		<table class="table table-striped table-hover">
 		<tr>
 			<th>ID</th>
 			<th>Name</th>
 			<th>Email</th>
 			
 			<th>Subject</th>
 			<th>Message</th>
 			<th>Delete</th>
 			
 		</tr>
 		
 		<?php 
 			$query = mysqli_query($conn, "SELECT * FROM `contacts`");
 			$count = mysqli_num_rows($query);
 			if($count) {
 				while($row = mysqli_fetch_array($query)) {
 		 ?>

 		 <tr>
 		 	<td><?php echo $row['id']; ?></td>
 		 	<td><?php echo $row['name']; ?></td>
 		 	<td><?php echo $row['email']; ?></td>
 		 	<td><?php echo $row['subject']; ?></td>
 		 	<td><?php echo $row['message']; ?></td>
 		 	<td><a href="deletemsg.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="confirm('Are you sure you want to delete?')">Delete</a></td>
 		 </tr>

 		<?php } } ?>

 	</table>
 	</div>
 	
 
 </body>
 </html>