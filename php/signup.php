<html>
<head>
<title>Sign Up</title>
<style>
body{
    height:130%;
	width:100%;
	margin:auto;
background: url("../images/bg1.jpg") no-repeat 50% 50%;
}
.abc {
font-family: sans-serif;
color:#036A81;
position : left;
}
h1
{
font-family:GeosansLight;
	color: #F3F9F4;
	text-shadow:0px 0px 20px #000;
    font-size:400%;
}

 img
 {
	 -vebkit-border-radius:50px;
	 height:110;
	 width:10%;
	 border-radius:50px;
	 
 }
table {    
   border: 20px solid white;
	-vebkit-border-radius:30px;
	border-radius:30px;
    width: 28%;
	align : center;
	position:middle;
	background-color:white;
	opacity:0.8;   
}

th, td {
    text-align: center;
	font-family: verdana;
color:grey;
    padding: 10px;
	font-size : 13px;
}
input[type=text], select {
    width: 70%;
    padding: 3px 4px;
    margin:  0;
    
    display: inline-block; border-radius: 10px;
     border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid grey;
}

input[type=submit] {
    width: 15%;
    background-color:#036A81;
    color: white;
    padding: 10px 10px;
    margin: 8px 0;
    border: white;
    border-radius: 15px;
    cursor: pointer;
}
input[type=pass] {
 width: 70%;
    padding: 4px 4px;
    margin: 0;
    
    display: inline-block; border-radius: 10px;
     border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid grey;
}
input[type=email] {
 width: 70%;
    padding: 4px 4px;
    margin:  0;
    display: inline-block; border-radius: 10px;
     border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid grey;
}

input[type=submit]:hover {
    background-color: #45a049;
}

</style>
<script language="JavaScript">
function validateForm() {
    var x1 = document.forms["myForm"]["fname"].value;
    if (x1 == null || x1 == "") {
        alert("First name must be filled out");
        return false;
		}
	var x2 = document.forms["myForm"]["lname"].value;
    if (x2 == null || x2 == "") {
        alert("Last name must be filled out");
        return false;
		}
	var x3 = document.forms["myForm"]["email"].value;
    if (x3 == null || x3 == "") {
        alert("Email must be filled out");
        return false;	
    }
    var x4 = document.forms["myForm"]["email"].value;
    var atpos = x4.indexOf("@");
    var dotpos = x4.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x4.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    alert("Registration is done successfully!");
	}
</script>
<link rel="icon" 
      type="image/png" 
      href="https://cdn.dribbble.com/users/462691/screenshots/2921080/dribbble_1x.png">
</head>
<body style="text-align:center;solidborder:1px">
<p><a href="HomeCar.html">
<img  src="../images/dribbble_1x.png"></a></p>
<div class="abc">
<h1 align="center">Lets go, Sign Up here !</h1>
<form name="signup-form" action="../include/signupdb.php" method="POST">
<p>

<table align="center"  cellpadding="1" cellspacing="1">
<tr>

<td align="center"><input type="text" name="fname" placeholder="First Name"></td>
<tr>

<td align="center"><input type="text" name="lname" placeholder="Last Name">
<tr>

<td align="center"><input type="Email" name="email" placeholder="Enter your email"></td>
<tr>

<td align="center"><input type="pass" name="pwd" placeholder="Enter 8 digit password"></td>
<tr>


<td align="center"><input type="text" placeholder="Phone Number" name="Number" width="10">

</table>
<p align="center" colspan="2"><input type="submit" name='submit'>
</form><br><br><br><br><br><br>Copyright © 2017 Aditya Thaokar,RAIT,New Mumbai.</div>

</body>
</html>