<?php
include "studentconn.php";
if(isset($_POST['search1']))
{
    $name1=$_POST['name'];
    $store="SELECT * FROM `reg` WHERE `name` = '$name1'";
    $result1=$conn->query($store);
    if($run = mysqli_query($conn,$store))
    {?>
        <BR><BR><label>Search Result</label><table border="1"><tr?><th>sno</th><th>name</th><th>Course</th><th>email</th><th>studdel</th></tr>
        <?php
        while($row = mysqli_fetch_assoc($run))
        {?><tr><td><?php echo $row["sid"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["course"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><a href="delete.php?sid=<?php echo $row["sid"];?>">delete</a></td>
                <td><a href="update.php?sid=<?php echo $row["sid"];?>">EDIT</a></td></tr>
<?php
        }
?></table><?php
    }$conn->close();
}
?>

<html>
<head><title>serch students</title>
</head>
<body><form method="POST" action="">
    <fieldset><legend>SEARCH</legend>
    <br><br>Enter Student Name(in caps):<br><br>
    <input type="text" name="name"><br><br>
    <input type="submit" value="Search" name="search1"></fieldset>
</form>
</body>
</html>