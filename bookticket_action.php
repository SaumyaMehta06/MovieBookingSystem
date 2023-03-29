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
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
	height:50px;
	width:150px;
  background-color: #4CAF50; 
  color: white; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: white;
  color: black;
}
.font{
	color:white;
}
table{
	width:80%;
	
}
th, td {
  border-bottom: 1px solid #ddd;
}

</style>
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



$q="insert into ticketbooktable(name,movie,seatbooked)
values('$a','$b',$c)";
mysqli_query($con,$q);


$mt="select *from movietable where Movie='$b'";
$mtt=mysqli_query($con,$mt);
while($rsm=mysqli_fetch_assoc($mtt)){
$as=$rsm['AvailableSeats'];
$as=$as-$c;
}
$p="update movietable set AvailableSeats='$as' where Movie='$b'";
mysqli_query($con,$p);


$vtbt="select *from ticketbooktable where name='$a'";
$vtbtt=mysqli_query($con,$vtbt);

?>

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6" style="background-color:rgba(0, 0, 0, 0.91)">
<br><br><br><br><br>
<center><span style="color:white;font-size:30px">Your Ticket is Booked</span><center>
<br>
<table style="background-color:rgba(0, 0, 0, 0.60)">
<?php
    while($rs=mysqli_fetch_assoc($vtbtt))
   {
?>

<tr>
	<td class="font"><?php echo $rs['name'];?></td>
	<td class="font"><?php echo $rs['movie'];?></td>
	<td class="font"><?php echo $rs['seatbooked'];?></td>
	
</tr>

<?php
}
?>
</table>
<br>
<center><a href="index.php"><input type="button" value="Home" class="button button1"/></a><center>
<br>
<br>
</div>
<div class="col-md-3">
<div>
</div>
</div>
</body>
</html>