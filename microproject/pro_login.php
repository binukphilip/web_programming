<?php
include "mpconnect.php";
if(isset($_POST['submit']))
{
    $mobno=$_POST['mobno'];
    $password=$_POST['pswd'];

    $sql= " SELECT `mobno`,`pswd` FROM `userdata` WHERE `mobno` = '$mobno' and `pswd` = '$password'";
    $result=$conn->query($sql);
    if($result->num_rows > 0)
    {
        die(header("location: http://localhost/petscage/micro_home.html"));
    }
    else {
        echo "invalide mob number or password";
    }
    $conn->close();
}
?>
<html>
	<head>	<link rel="stylesheet"  href="cusloginstyle.css">
		<title>LOGIN</title>
	</head>
		
	<body>
		<div class="loginbox">
			<img src="avatar.png" class="avatar">
				<h1>USER_LOGIN</h1>
				<form method="POST" action="">
					<p>User name</p>
					<input type="text" name="mobno" placeholder="enter phone number" required>
					<p>Pasword:</p>
					<input type="password" name="pswd" placeholder="Enter password" required>
                    <i class="far fa-eye" id="tooglepassword" style="margin-left:-30px;cursor:pointer;"></i><br>
					<input type="submit" name="submit" value="Login"><br><br><br><br>
					<a href="forgotpswd.html">Forgot Password</a><br><br>
					<a href="http://localhost/petscage/petscage_reg.php">New User</a>
				</form>
		</div>
	</body>
</html>