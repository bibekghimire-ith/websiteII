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
 		<a href="./add.php" class="btn btn-primary">Add Projects</a>
 		<a href="./index.php" class="btn btn-secondary float-center">Home</a>
 		<a href="./updatecv.php" class="btn btn-secondary float-center">Update Bio Data</a>
 		<a href="./messages.php" class="btn btn-secondary float-center">Messages</a>
 		<a href="logout.php" class="btn btn-danger float-right">Logout</a>
 		<br><br>
 		<table class="table table-striped table-hover">
 		<tr>
 			<th>ID</th>
 			<th>Title</th>
 			<th>Date</th>
 			
 			<th>Update</th>
 			<th>Delete</th>
 			
 		</tr>
 		
 		<?php 
 			$query = mysqli_query($conn, "SELECT * FROM `projects`");
 			$count = mysqli_num_rows($query);
 			if($count) {
 				while($row = mysqli_fetch_array($query)) {
 		 ?>

 		 <tr>
 		 	<td><?php echo $row['id']; ?></td>
 		 	<td><?php echo $row['title']; ?></td>
 		 	<td><?php echo $row['date']; ?></td>
 		 	<td><button class="btn btn-warning"><a href="update.php?id=<?php echo $row['id']; ?>" onclick="confirm('Are you sure to update?')">Update</a></button></td>
 		 	<td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="confirm('Are you sure you want to delete?')">Delete</a></td>
 		 </tr>

 		<?php } } ?>

 	</table>
 	</div>
 	
 
 </body>
 </html>