<?php
include "connect.php";
if(isset($_POST['submit']))
{	
	$name=$_POST['name'];
	$address=$_POST['addr'];
	$phn=$_POST['phno'];
	$model=$_POST['vmodel'];
	$price=$_POST['price'];
	
	
$sql = "INSERT INTO `user` ( `name`, `addr`, `phn`, `model`, `price`) VALUES ( '$name', '$address', '$phn', '$model', '$price')";
$result=$conn->query($sql);
if($result==TRUE)
{
	echo "SUCCESSFULLY INSERTED";

}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
	<head>
		<title>newcustomer</title>
	</head>
		
	<body>
		<form method="POST" action="">
				<h1>Register</h1>
				Name<br>
				<input type="text" name="name"  required><br>
                Address<br>
				<input type="text" name="addr" required><br>
                Mobile No<br>
				<input type="text" name="phno"  required><br>
                Vehicle Model<br>
				<input type="text" name="vmodel" required><br>
                Price<br>
				<input type="text" name="price" required><br>
				<input type="submit" name="submit" value="register"><br><br><br><br><br>
			</div>
		</form>
	</body>
</html>