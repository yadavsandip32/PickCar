<?php 
	include 'dbh_inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['fname']);
	$last = mysqli_real_escape_string($conn, $_POST['lname']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$brand = mysqli_real_escape_string($conn, $_POST['Brand']);
	$variant = mysqli_real_escape_string($conn, $_POST['variant']);
	$color = mysqli_real_escape_string($conn, $_POST['color']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);
	$km = mysqli_real_escape_string($conn, $_POST['km']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$email = mysqli_real_escape_string($conn, $_POST['Email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$addrs = mysqli_real_escape_string($conn, $_POST['addrs']);

$sql = "INSERT INTO sellcardb(first_name,last_name,age,brand,variant,color,year,km,city,price,email,phone,addrs)
				VALUES ('$first', '$last', '$age','$brand','$variant','$color','$year','$km','$city','$price','$email','$phone','$addrs');";
				mysqli_query($conn,$sql);
				
				header("Location: ../php/login.php");
				exit();
