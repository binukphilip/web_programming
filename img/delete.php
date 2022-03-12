<?php
include "studentconn.php";
if(isset($_GET['sid']))
{
    $sid=$_GET['sid'];
    $store="DELETE FROM `reg` WHERE `sid` = '$sid'";
    $result=$conn->query($store);
    if($result == TRUE)
    {
        echo "<br><br>row deleted successfully";
    }
    else
    {
        echo "deletion is notpossible yet";
    }
}$conn->close()
?>