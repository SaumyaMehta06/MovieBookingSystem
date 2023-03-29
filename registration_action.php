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

<!--icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

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
</head>
</body>
<?php

$con=mysqli_connect("localhost","root","","saumya");
if(!$con)
{
	echo "not connected";
	
}
$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
$c=$_REQUEST['t3'];
$d=$_REQUEST['t4'];


$q="insert into registrationformtable(name,phone,email,pass)
values('$a',$b,'$c','$d')";
mysqli_query($con,$q);

?>

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6" style="background-color:rgba(0, 0, 0, 0.91)">
<br><br><br><br><br>
<center><span style="color:white;font-size:40px">Thank You For Registering :)</span><center>
<br>
<center><a href="index.php"><input type="button" value="Go to Home" class="button button1"/></a><center>
<br>
<br>
</div>
<div class="col-md-3">
<div>
</div>
</div>
</body>
</html>