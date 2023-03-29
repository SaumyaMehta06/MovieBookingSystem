<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
body{
	background-image:url('images/loginbg.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-size: cover;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: #4CAF50; 
  color: white; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: white;
  color: black;
}
</style>
<body>
<?php

$con=mysqli_connect("localhost","root","","saumya");
if(!$con)
{
	echo "not connected";
	
}

$e=$_REQUEST['t1'];
$p=$_REQUEST['t2'];

$q="select *from registrationformtable where email='$e'";
$qu=mysqli_query($con,$q);
$rs=mysqli_fetch_assoc($qu);

$dp=$rs['pass'];

if($p==$dp)
	header ("location:bookticket.php");
else
	

?>

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6" style="background-color:rgba(0, 0, 0, 0.91)">
<br><br><br><br><br>
<center><span style="color:white;font-size:40px"><?php echo "Please Enter A Valid Password" ?></span><center>
<br>
<center><a href="adminlogin.php"><input type="button" value="Login" class="button button1"/></a><center>
<br>
<br>
</div>
<div class="col-md-3">
<div>
</div>
</div>	
</body>
</html>