<?php 
ob_start();
	session_start();
	include 'conn.php';
	if($_SESSION['user']) {

	} else {
		header('location:index.php');
		ob_end_flush();
	}

	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM `contacts` WHERE `id`=$id");

	header('location:messages.php');

 ?>