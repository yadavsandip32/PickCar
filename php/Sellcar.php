<html>
<head>
<title>Sell Car</title>
<link rel="stylesheet" type="text/css" href="../css/style1.css">

<style>
body{
    height:130%;
	width:100%;
	margin:auto;
background: url("../images/bg1.jpg") no-repeat 50% 50%;
background-color:black;
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


input::-webkit-input-placeholder
   {
    font-size: 14px;
	style:bold;
    line-height:2; 
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
    width: 40%;
	align : center;
	position:middle;
	background-color:white;
	opacity:0.8;   
}

th, td {
    
	font-family:Sans-serif;
color:#036A81;
    padding: 12px;
	font-size : 18px;
}
input[type=text], select {
    width: 300px;
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
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
}
input[type=email] {
 width: 300px;
    padding: 4px 4px;
    margin:  0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
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
        return false; }
    
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
    alert("Your car has been listed on sell");
	}
</script>
<link rel="icon" 
      type="image/png" 
      href="../images/dribbble_1x.png">
</head>
<body style="text-align:center;solidborder:1px">
<p><a href="HomeCar.html">
<img  src="../images/dribbble_1x.png"></a></p>
<div class="abc">
<h1 align="center">Sell your Car</h1>
<form name="myForm" action="../include/sellCardb.php" onsubmit="return validateForm();" method="post">
<p>

<table align="center">
<tr>

<td align="center"><input style="visibility: visible;"type="text" name="fname" size="20px" placeholder="First Name "></td>
<td align="center"><input type="text" name="lname" size="20px" placeholder="Last Name ">
<td align="center"><input type="text" name="age"size="20px"  placeholder="Age">
<tr>

<td align="center"><input type="text" name="Brand" size="20px"placeholder="Brand/Model">
<td align="center"><input type="text" name="variant" size="20px"placeholder="Varient">
<td align="center"><input type="text" name="color" size="20px"placeholder="Color">
<tr>
<td align="center"><input type="text" name="year" size="20px" placeholder="Registration Year">
<td align="center"><input type="text" name="km"size="20px"  placeholder="Kilometers driven">
<td align="center"><input type="text" name="city"size="20px"  placeholder="City">
<tr>

<td align="center"><input type="Email" name="email" placeholder="Enter your email"></td>
<td align="center"><input type="text" placeholder="Phone Number" name="phone" width="10">
<td align="center"><input type="text" name="addrs" placeholder="Home Address"></td>
<tr>
<td align="left">Upload Picture 1:<td align="left">Upload Picture 2: <td align="left">Upload Picture 3:<tr>
<td><input type="file" name="file1"> 
 <td><input type="file" name="file2"> 
<td><input type="file" name="file3"> 
<tr> <td><td align="center"><input type="text" name="price" size="20px" placeholder="Expected price in Rs.">
<tr><td><td align="center" ><input type="checkbox"><a href="#" class="btn1">Accept terms & conditions</a></td>

</table>
<p align="center" colspan="2"><input type="submit" value="Sell Now">
</form><br><br><br><br><br><br>

 <footer class="footer">
        
            <div class="container">
            
                <div class="row">
                
                    <div class="col-md-6">
                    
                        <div id="copyright">
                            <p>Copyright &copy; 2017 <a href="#"> - PickCar</a></p>
                        </div>
                    </div>
                </div>
            
            </div>
        
        
        </footer>

</body>
</html>