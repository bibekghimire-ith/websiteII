<?php 

include "conn.php";

if (isset($_POST['contact'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	mysqli_query($conn, "INSERT INTO `contacts` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')");
	header('location:index.php');
}



 ?>
