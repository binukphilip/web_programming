<?php
include "alancon.php";
if(isset($_POST['save']))
{	
	$cn=$_POST['c1'];
    $qr=$_POST['c2'];
	$er=$_POST['c3'];
	$sal=$_POST['c4'];
	$mob=$_POST['c5'];
	
	
$sql = "INSERT INTO `company` ( `cname`, `qr`, `er`, `sal`, `mob`) VALUES ( '$cn', '$qr', '$er', '$sal', '$mob')";
$result=$conn->query($sql);
if($result==TRUE)
{
	

}
else
{
	echo "Error".$sql."<br>".$conn->error;
}

}
?> 
<?php
$sql1 = " SELECT * FROM `company` WHWRE `id`= " ;
$result=$conn->query($sql1);
?>

<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['addr'];?></td>
<td><?php echo $row['phn'];?></td>
<td><?php echo $row['model'];?></td>
<td><?php echo $row['price'];?></td>
    </tr>
<?php
	}
}$conn->close();
?>



<html>
    <head><title>
      admin 
    </title></head> 
    <body text="white" bgcolor="red">
    <div style=background-color:rgb(187,188,194);height:80px;position:absolute;width:100%;top:0%;left:0%;><img src="wulogo.jpg"></div>
    <div style=position:absolute;left:420px;top:0px;><h3><big><big><big>wAITS &nbsp&nbsp&nbsp  yOU . . .</big></big></big></h3></div>
<div style=position:absolute;top:130px;left:33px;height:420px;background-color:#FAEBD7;bottom:15px;width:450px;>h</div>
<div style=position:absolute;left:0px;top:85px;><a href=home.php ><img src="Home1.jpg" ></a> </div>


<div style=position:absolute;left:95px;top:150px><font color="red"><BR><BR>
      <center><H4>ADD A NEW JOB HERE</H4></center><BR><small><small>

      <form name="regform" action="" method="post" onsubmit="return vForm()">
      
      <table border="3">
        <tr><td ><font color="red">Company  Name</small> </td> <td><input  type=text name="c1" id="cn" placeholder="company name"></td></tr>
          <tr><td><font color="red">Qualification Required  </td> <td><input  type=text name="c2" id="qr" placeholder="qualification"></td></tr>
            <tr><td><font color="red">Experience Required  </td><td><input  type=text name="c3" id="er" placeholder="experience"></td></tr>
              <tr><td><font color="red">Salary  </td><td> <input  type=text name="c4" id="s4" placeholder="salary"></td></tr>
                <tr><td><font color="red">Mobile number  </td> <td><input  type=text name="c5" id="mn" placeholder="mobile number"></td></tr>
                  
              </table>
                <BR><br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="submit" name="save" value="submit">
                <HR><br><br>
                 </form> </font>
                
<div style=position:absolute;top:-45px;left:470px;height:215px;background-color:#FAEBD7;bottom:0px;width:600px;overflow:scroll;>
   <center><font color="red"><H3>REGISTERED COMPANIES</H3>
<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Phone Number</th>
<th>Vehicel Model</th>
<th>Price</th>
</tr></center>

</div>
<div style=position:absolute;top:195px;left:470px;height:215px;background-color:#FAEBD7;bottom:0px;width:600px;overflow:scroll;>
<center><font color="red"><H3>REGISTERED USERS</H3></center></div>

    
</body>
</html>