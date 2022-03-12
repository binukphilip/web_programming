<?php
    $name=array("Arun"=>"20","Amal"=>"10","Don"=>"40","Binu"=>"30","Vinu"=>"50");
    print_r($name);
    echo "<br><br>ascending order using asort<br>";
    asort($name);
    print_r($name);
    echo "<br><br>decending order using arsort<br>";
    arsort($name);
    print_r($name);
?>