<?php
include "mpconnect.php";
if(isset($_POST['submit']))
{	
	$firstname1=$_POST['firstname'];
	$lastname1=$_POST['lastname'];
	$address=$_POST['address'];
	$mob1=$_POST['mobno'];
	$password1=$_POST['pswd'];
	$cpassword1=$_POST['cpswd'];
	
	
$sql = "INSERT INTO `userdata` ( `firstname`, `lastname`, `addr`, `mobno`, `pswd`, `cpswd`) VALUES ( '$firstname1', '$lastname1', '$address', '$mob1', '$password1', '$cpassword1')";
$result=$conn->query($sql);
if($result==TRUE)
{
	die(header("location: http://localhost/petscage/pro_login.php"));

}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
	<head>	<link rel="stylesheet"  href="reg_style.css">
		<title>newcustomer</title>
	</head>
		
	<body>
		<form method="POST" action="">
			<div class="loginbox">
				<img src="avatar.png" class="avatar">
				<h1>Register</h1>
				First Name<br>
				<input type="text" name="firstname" placeholder="enter first name" required>
                Second Name<br>
				<input type="text" name="lastname" placeholder="enter second name" required>
                Address
				<input type="text" name="address" placeholder="Addres With Pincode" required>
                Mob Number
				<input type="text" name="mobno" placeholder="enter mob number " required>
                Password
				<input type="password" name="pswd" placeholder="enter password" required>
				ConfirmPasword:
				<input type="password" name="cpswd" id="pid" placeholder="confirm password" required><br>
				<input type="submit" name="submit" value="register"><br><br><br><br><br>
				<a href="http://localhost/petscage/pro_login.php">already have an account</a><br><br>
			</div>
		</form>
	</body>
</html>