<?php
include "alancon.php";
if (isset($_POST['save']))
{
    $fname=$_POST['r1'];
    $lname=$_POST['r2'];
    $em=$_POST['r3'];
    $mob=$_POST['r4'];
    $usn=$_POST['r5'];
    $pass=$_POST['r6'];

$sql_query="INSERT INTO `registration`(`fname`, `lname`, `email`, `mobno`, `username`, `password`) VALUES ('$fname', '$lname', '$em', '$mob', '$usn', '$pass')";
$result=$conn->query($sql_query);
if ($result==TRUE)
{
    echo "entry successfull";
}

}
?>