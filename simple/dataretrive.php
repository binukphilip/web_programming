<?php
require 'databaseconnect.php';
$query='select * from register';?>
<html>
    <body>
        <table border="1"><tr><th>Name</th><th>surename</th><th>Email</th></tr>
<?php
if($is_query_run=mysqli_query($con,$query))
{   
         while($query_execute=mysqli_fetch_assoc($is_query_run))
        {?>
<tr><td><?php echo $query_execute['firstname'];?></td>
             <td><?php echo $query_execute['secondname'];?></td>
            <td><?php echo $query_execute['email'];?></td></tr>
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