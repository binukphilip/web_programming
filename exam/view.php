<?php
include "connect.php";
$sql = " SELECT * FROM `user` WHWRE `id`= " ;
$result=$conn->query($sql);
?>
<html>
<head>
<title>view page</title>
</head>
<body><form method="get">
<div class="container">
<h2>USERS</h2>
<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Phone Number</th>
<th>Vehicel Model</th>
<th>Price</th>
</tr>
<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['addr'];?></td>
<td><?php echo $row['phn'];?></td>
<td><?php echo $row['model'];?></td>
<td><?php echo $row['price'];?></td>
    </tr>
<?php
	}
}
?>

</table></form> </body>
</html>