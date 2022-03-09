<?php
include "mpconnect.php";
if(isset($_POST['submit']))
{
    $user=$_POST['user'];
    $password=$_POST['pswd'];

    $sql= " SELECT `user`,`pswd` FROM `admin` WHERE `user` = '$user' and `pswd` = '$password'";
    $result=$conn->query($sql);
    if($result->num_rows > 0)
    {
        echo "LOGIN SUCCESSFULL";
        die(header("location: http://localhost/petscage/sellerhome.html"));
    }
    else {
        echo "invalide mob number or password";
    }
    $conn->close();
}
?>
<html>
	<head>	<link rel="stylesheet"  href="cusloginstyle.css">
		<title>shop_login</title>
	</head>
		
	<body>
		<div class="loginbox">
			<img src="avatar.png" class="avatar">
				<h1>SHOP_LOGIN</h1>
				<form method="POST" action="">
					<p>User name</p>
					<input type="text" name="user" placeholder="enter username" required>
					<p>Pasword:</p>
					<input type="password" name="pswd" placeholder="Enter password" required>
                    <i class="far fa-eye" id="tooglepassword" style="margin-left:-30px;cursor:pointer;"></i><br>
					<input type="submit" name="submit" value="Login"><br><br><br><br>
				</form>
		</div>
	</body>
</html>