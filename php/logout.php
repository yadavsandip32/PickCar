<?php
        if(!isset($e_mail))
        {
        	$message = "You need to login first ";
            echo "<script type='text/javascript'>alert($message);</script>";
        }
	session_start();
	session_unset();
	session_destroy();
	header("Location:index.php");
	exit();
?>
