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


<style>
body{
	background-image:url('images/login.jpg');
	background-repeat: no-repeat;
	 background-attachment: fixed;
     background-size: cover;
}
.highlight {
    background: rgba(0, 0, 0, 0.75);
    padding: 3px 5px;
    margin: -3px -5px;
    line-height: 1.7;
    border-radius: 3px;
    display:inline-block;
}
.font{
	color:white;
}
.button1 {
	width:150px;
	height:40px;
	border-radius:5px;
  background-color:rgba(28, 28, 28, 0.85); 
  color: white; 
  border: 1px solid white;
}

.button1:hover {
  background-color:white;
  color: black;
  border: 2px solid black;
}

</style>
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<br>
<br>
<br><br>
<br>
<br>
<center><span style="color:white; font-size:30px" class="highlight">Admin Login</span><center>
<br><br>
</div>
</div>
</div>
<form name="f1" method="POST" action="adminlogin_action.php">
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background-color:rgba(0, 0, 0, 0.75)">
<br>
<span class="font">Email</span>
<input type="text" placeholder="Enter Your Email" class=" form-control box" name="t1"> 
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
<div class="col-md-4" style="background-color:rgba(0, 0, 0, 0.75)">
<span class="font">Password</span>
<input type="password" placeholder="Enter Your Password" class=" form-control box" name="t2">
<br><br>
</div>
<div class="col-md-4">
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background-color:rgba(0, 0, 0, 0.75)">
<center><input type="Submit" value="Login" class="button1"><center>
<br>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</form>

</body>
</html>