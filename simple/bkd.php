<?php
require 'bookconnect.php';
$query='select * from books';
if($is_query_run=mysqli_query($con,$query))
{
    echo "<br>query executed<br>";
    while($query_execute=mysqli_fetch_assoc($is_query_run))
    {
        echo $query_execute['title']."<br>";
    }
}
else
{
    echo "query not executed";
}
?>