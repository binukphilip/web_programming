<?php
include "studentconn.php";
if(isset($_POST['submit']))
{
    $sid=$_POST['sid'];
    $name=$_POST['name'];
    $course=$_POST['course'];
    $email=$_POST['mail'];
    $store="UPDATE `reg` SET `sid`='$sid',`name`='$name',`course`='$course',`email` = '$email' WHERE `sid` = '$sid'";
    $result=$conn->query($store);
    if($result == TRUE)
    {
       die(header("location:http://localhost/img/search.php"));
    }
    else{
        echo "failed to update";
    }
}
if(isset($_GET['sid']))
{
    $sid=$_GET['sid'];
    $store="SELECT * FROM `reg` WHERE `sid`='$sid'";
    $result=$conn->query($store);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $sid=$row["sid"];
            $name=$row["name"];
            $course=$row["course"];
            $email=$row["email"];
        }
    }
?>
<html>
<body>
<form method="POST" action="">
<fieldset>
    <legend>STUDENT UPDATION</legend>
<br><br>Student id:<br><br>
<input type ="text" name="sid" value ="<?php echo $sid ?>" require><br><br>
<br>Name:<br><input type="text" name="name" value="<?php echo $name ?>" required><br>
            <br>Course:<br>
            <input type="text" name="course" value="<?php echo $course ?>" required><br>
            <br>Email:<br>
            <input type="email" name="mail" value="<?php echo $email ?>" required><br><br>
            <input type="submit" name="submit" value="Update"></fieldset></form>
</body>
</html>
<?php
}
else
{
    echo "else part";
}