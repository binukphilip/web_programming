<?php
    $msql_host='localhost';
    $mysql_user='root';
    $msql_password='';
    $con=mysqli_connect($msql_host,$mysql_user,$msql_password);
    if(mysqli_select_db($con,'class'))
    {echo 'connection successful';
    }
    else{
        echo 'connection failed';
    }
    ?>