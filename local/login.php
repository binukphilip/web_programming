<?php
include "config.php";
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql= " SELECT `email`,`password` FROM `local` WHERE `email` = '$email' and `password` = '$password'";
    $result=$conn->query($sql);
    if($result->num_rows > 0)
    {
       echo "<br>validation successfull";
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
				<h1>USER_LOGIN</h1>
				<form method="POST" action="">
					<p>User name</p>
					<input type="text" name="email" placeholder="enter email" required>
					<p>Pasword:</p>
					<input type="password" name="password" placeholder="Enter password" required><br><br>
					<input type="submit" name="submit" value="Login"><br><br><br><br>
					<a href="forgotpswd.html">Forgot Password</a><br><br>
				</form>
	</body>
</html>