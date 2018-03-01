<?php


//if (isset($_POST['submit'])) {
	
	 
	
	include 'dbh_inc.php';
	$first = mysqli_real_escape_string($conn, $_POST['fname']);
	$last = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$mob = mysqli_real_escape_string($conn, $_POST['Number']);
	
	if($first=="" || $last=="" || $email=="" || $pwd=="" || $mob=="") 
	{
		//header("Location: ../php/signup.php?loginError");
		header("Location: ../php/signup.php?loginError");
					
			exit();

	}
	else
	{
	$sql = "INSERT INTO users(first_name,last_name,email,password,ContactNo)
				VALUES ('$first', '$last', '$email','$pwd','$mob');";
				mysqli_query($conn,$sql);
				
				header("Location: ../php/login.php");
			
	}		
				


//else {
	


//	header("Location: ../signup.php");
	
	
	//exit();
//}
?>