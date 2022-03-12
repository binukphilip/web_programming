<?php
include "studentconn.php";
if(isset($_POST['submit']))
{   $name=$_POST['name'];
    $course=$_POST['course'];
    $mail=$_POST['mail'];
    $store="INSERT INTO `reg` (`name`,`course`,`email`) VALUE('$name','$course','$mail')";
    $result=$conn->query($store);
    if($result==TRUE)
    {
        echo "one row inserted";
    }
    else{
        echo "failed to insert data";
    }
$conn->close();

}?>
<html>
<body>
<form method="POST" action="">
<fieldset><legend>REGISTRATION</legend>
<br>Name:<br><input type="text" name="name" required><br>
            <br>Course:<br>
            <input type="text" name="course" required><br>
            <br>Email:<br>
            <input type="email" name="mail" required><br>
            <input type="submit" name="submit"></fieldset></form>
</body>
</html>
