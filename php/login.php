<html>
<head>
<title>Log in</title>
<style>
body{
   height:130%;
	width:100%;
	margin:auto;
	background: url("../images/bg1.jpg") no-repeat 50% 50%;
	display: table;
	top: 0;
	background-size: cover;
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
input[type=password] {
 width: 70%;
    padding: 4px 4px;
    margin: 0;
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
 
<link rel="icon" 
      type="image/png" 
      href="https://cdn.dribbble.com/users/462691/screenshots/2921080/dribbble_1x.png">
</head>
<body style="text-align:center;solidborder:1px">
<p>
<a href="HomeCar.html"
<img  src="../images/dribbble_1x.png"></a></p>
<div class="abc">
<h1 align="center">Welcome,Log in here !</h1>
<form name="myForm" action="../include/loginDB.php" method="post">
<p>
<table align="center"  cellpadding="1" cellspacing="1">
<tr>
<td align="center"><input type="text" name="Email" placeholder="Email"></td>
<tr>
<td align="center"><input type="password" name="pwd" placeholder="password"></td>
<tr>
</table>
<p align="center" colspan="2"><input type="submit" value="Log in">
</form>
<a href="#" style="yellow">Forgot password ?</a>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Copyright © 2017 Aditya Thaokar,RAIT,New Mumbai.</div>
</body>
</html>