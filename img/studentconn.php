<?php
$host="localhost";
$user="root";
$pswd="";
$conn=mysqli_connect($host,$user,$pswd);
if(mysqli_select_db($conn,'student'))
{
    echo "connection successfull";
}
else
{
    echo "connection failed";
}