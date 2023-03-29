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
	background-image:url('images/bg2.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-size: cover;
}
.highlight {
    background: rgba(0, 0, 0, 0.75);
	color:white;
	font-size:30px;
    padding: 4px 7px;
    margin: -3px -5px;
    line-height: 2;
    border-radius: 3px;
    display:inline-block;
}
table{
	width:80%;
	
}
th, td {
  border-bottom: 1px solid #ddd;
}
tr:hover
 {
	 background-color: rgba(0, 0, 0, 0.91);
	 }
th {
  background-color:blue";
  color:white;
}
.font{
	color:white;
}
#tablecaption {
  caption-side: bottom;
}

</style>
</head>

<body>
<?php

$con=mysqli_connect("localhost","root","","saumya");
if(!$con)
{
	echo "not connected";
	
}

$vmt="select *from movietable";
$vmtt=mysqli_query($con,$vmt);


$vtbt="select *from ticketbooktable";
$vtbtt=mysqli_query($con,$vtbt);



?>
<br><br>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<center><span class="highlight">Database</span><center>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<br><br><br>
<div style="overflow-x:auto;">
<center><table style="background-color:rgba(0, 0, 0, 0.60)" id="tablecaption">
<caption style="color:white ;text-align:center">Table:Movie</caption>
<tr>
           <th class="font" style="background-color:black">Movie</th>
           <th class="font" style="background-color:black">TotalSeats</th>
           <th class="font" style="background-color:black">AvailableSeats</th>
</tr>
<?php
    while($rs=mysqli_fetch_assoc($vmtt))
   {
?>

 <tr>
	<td class="font"><?php echo $rs['Movie'];?></td>
	<td class="font"><?php echo $rs['TotalSeats'];?></td>
	<td class="font"><?php echo $rs['AvailableSeats'];?></td>
</tr>	
<?php
}
?>
</table><center>
</div>
</div>
</div>
</div>

<br>
<br><br>

</table>


<div style="overflow-x:auto;">
<center><table style="background-color:rgba(0, 0, 0, 0.60)" id="tablecaption">
<center><caption style="color:white;text-align:center">Table:Customer</caption><center>
<tr>
	<th class="font" style="background-color:black">Customer's Name</th>
	<th class="font"style="background-color:black">Movie Booked</th>
	<th class="font" style="background-color:black">Seats Booked</th>
	
</tr>
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
</table><center>
</div>
</body>
</html>