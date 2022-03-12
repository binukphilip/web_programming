<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$database="job portal";
$conn=mysqli_connect($mysql_host,$mysql_user, $mysql_password ,$database);
if (mysqli_select_db($conn, 'job portal') )
{
echo 'connection success';
}
else
{
echo 'connection failed';
}

