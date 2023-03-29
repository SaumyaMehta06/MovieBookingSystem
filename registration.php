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
	background-image:url('images/bg1.jpg');
	background-repeat: no-repeat;
	 background-attachment: fixed;
     background-size: cover;
}
.font{
	color:white;
}
.button1 {
  background-color:white; 
  color: black; 
  border: 2px solid balck;
}

.button1:hover {
  background-color: black;
  color: white;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row" style="background-color:black">
<div class="col-md-3">
<br>
<center><a href="index.php" style="text-decoration:none; color:white"><span><i class="bi bi-house-fill"></i>&nbsp;Home</span></a><center>
<br>
</div>
<div class="col-md-3">
<br>
<center><a href="registration.php" style="text-decoration:none; color:white"><span><i class="bi bi-box-arrow-in-right"></i>&nbsp;Registration</span></a><center>
<br>
</div>
<div class="col-md-3">
<br>
<center><a href="adminlogin.php" style="text-decoration:none; color:white"><span><i class="bi bi-person-circle"></i>&nbsp;Admin Login</span></a><center>
<br>
</div>
<div class="col-md-3">
<br>
<center><a href="userlogin.php" style="text-decoration:none; color:white"><span><i class="bi bi-people-fill"></i>&nbsp;User Login</span></a><center>
<br>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<br><br><br>
<center><span style="font-size:30px;color:white;font-family: Trirong, serif">REGISTER TO START BOOKING</span><center>
<br><br>
</div>
</div>

<form name="f1" method="POST" action="registration_action.php">
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background-color:rgba(0, 0, 0, 0.81)">
<br>
<span class="font">Name</span><br>
<input type="text" placeholder="Enter Your Name" class=" form-control box" name="t1">
<br>
</div>
<div class="col-md-4">
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background-color:rgba(0, 0, 0, 0.81)">
<span class="font">Phone Number</span><br>
<input type="Number" placeholder="Enter Your Number" class=" form-control box" name="t2">
<br>
</div>
<div class="col-md-4">
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background-color:rgba(0, 0, 0, 0.81)">
<span class="font">Email</span><br>
<input type="text" placeholder="Enter Your Email" class=" form-control box" name="t3">
<br>
</div>
<div class="col-md-4">
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background-color:rgba(0, 0, 0, 0.81)">
<span class="font">Password</span><br>
<input type="password" placeholder="Enter Your Password" class=" form-control box" name="t4">
</div>
<div class="col-md-4">
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background-color:rgba(0, 0, 0, 0.81)">
<br>
<center><input type="Submit" value="Register" class="button1" style="height:40px;width:150px"><center>
<br>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</form>


</body>


</html>