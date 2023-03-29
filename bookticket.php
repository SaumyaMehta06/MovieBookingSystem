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
	background-image:url('images/bg1.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-size: cover;
}
.highlight {
    background: rgba(0, 0, 0, 0.90);
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
	
	border-radius:5px;
  background-color:black; 
  color: white; 
  border: 1px solid white;
}

.button1:hover {
  background-color:#4CAF50;
  color: white;
  border: 2px solid white;
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
<center><span style="color:white; font-size:30px" class="highlight">Book Here</span><center>
<br><br>
</div>
</div>
</div>

<form name="f1" method="POST" action="bookticket_action.php">
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<span class="font"> Name of the customer</span>
<input type="text" name="t1" class="form-control">
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
<div class="col-md-4">
<span class="font">Choose Movie</span>
<select name="t2" class="form-control">
<option name="t2" value="Select">Select</option>
<option name="t2" value="Titanic">Titanic</option>
<option name="t2" value="Call Me By Your Name">Call Me By Your Name</option>
<option name="t2" value="Sixteen Candles">Sixteen Candles</option>
<option name="t2" value="Pride And Prejudice">Pride And Prejudice</option>
</select>
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
<div class="col-md-4">
<span class="font">No. of seats to be booked</span>
<input type="number" name="t3" class="form-control">
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
<div class="col-md-4">
<br>
<input type="submit" value="Book" class="form-control button1">
<br>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</form>


</body>

</html>