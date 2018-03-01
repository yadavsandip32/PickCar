<?php

session_start();
    include 'dbh_inc.php';
    $email= mysqli_real_escape_string($conn,$_POST['Email']) ;
    $pwd= mysqli_real_escape_string($conn,$_POST['pwd']) ;

    $sql="SELECT * FROM users WHERE email = '$email' AND password = '$pwd' " ;
    $result = mysqli_query($conn,$sql) ;
     $count = mysqli_num_rows($result);

     if($count == 1) {
         // session_register("myusername");
        		 $_SESSION['e_mail']=$email;
                 // $_session['Fname']=$row['first_name'];
                 // $_session['Lname']=$row['last_name'];
                $_SESSION['pswd']=$pwd;

          header("Location:../index.php");
      }
      else
      { 
      	header("Location:../index.php?login=error");
	}
?>