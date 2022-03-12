<?php
    $msql_host='localhost';
    $mysql_user='root';
    $msql_password='';
    $binu=mysqli_connect($msql_host,$mysql_user,$msql_password);
    if(mysqli_select_db($binu,'library'))
    {echo 'connection successful';
    }
    else{
        echo 'connection failed';
    }
    ?>