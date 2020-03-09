<?php 
	session_start();
	$db = mysqli_connect($_ENV["DBSERVER"], $_ENV["DBUSER"], $_ENV["DBPASSWORD"], $_ENV["DATABASE"]);

	// initialize variables
	$phone = "";
	$description = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$phone = $_POST['phone'];
		$description = $_POST['description'];

		mysqli_query($db, "INSERT INTO blacklist (phone, description) VALUES ('$phone', '$description')"); 
		$_SESSION['message'] = "description saved"; 
		header('location: index.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$phone = $_POST['phone'];
		$description = $_POST['description'];

		mysqli_query($db, "UPDATE blacklist SET phone='$phone', description='$description' WHERE id=$id");
		$_SESSION['message'] = "description updated!"; 
		header('location: index.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM blacklist WHERE id=$id");
	$_SESSION['message'] = "Description deleted!"; 
	header('location: index.php');
}


	$results = mysqli_query($db, "SELECT * FROM blacklist");


?>