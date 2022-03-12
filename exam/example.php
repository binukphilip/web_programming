<?php
include "exampleconn.php";
if(isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];

    $ver="INSERT INTO `alan` (`name`,`email`,`pswd`) VALUES('$name','$email','$pswd')";
    $result=$binu->query($ver);
    if($result==TRUE)
    {
        echo "inserted successfully";
    }
    else
    {
        echo "failed to insert";
    }
    $binu->close();
}
?>
<html>
    <body>
        <form method="POST" action="">
            <fieldset><legend>registration</legend>
            Name<br>
				<input type="text" name="name"  required><br>
                Email<br>
				<input type="text" name="email" ><br>
                Password<br>
				<input type="text" name="pswd"  required><br>
                <input type="submit" name="submit">
            </fieldset>
</form>
</body>
</html>