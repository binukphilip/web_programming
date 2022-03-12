<?php
require 'bookconnect.php';
if (isset($_GET['title'])) 
{

    $title = $_GET['title'];
$query="SELECT * from `books` WHERE `title` = '$title'";
?>
<html>
    <body>
        <table border="1"><tr><th>Name</th><th>surename</th><th>Email</th></tr>
<?php
if($is_query_run=mysqli_query($con,$query))
{   
         while($query_execute=mysqli_fetch_assoc($is_query_run))
        {?>
<tr><td><?php echo $query_execute['ano'];?></td>
             <td><?php echo $query_execute['title'];?></td>
            <td><?php echo $query_execute['author'];?></td></tr>
   <?php }
}
else
{
    echo "query not executed";
}
?>
</table>
</body>
</html>
<?php
}
?>