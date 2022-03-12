<?php 

include "config.php";

    if (isset($_POST['update'])) 
	{

        $username=$_POST['username'];
	    $email=$_POST['email'];
	    $password=$_POST['password'];
	    $confirmpassword=$_POST['confirmpassword'];


        $sql = "UPDATE `user details` SET `username`='$username',`email`='$email',`password`='$password',`confirmpassword`='$confirmpassword'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 

    if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `user details` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc())
		{

            $username = $row['username'];
            $email = $row['email'];
            $password  = $row['password'];
            $confirmpassword = $row['confirmpassword'];
        } 

?>

        <h2>User Update Form</h2>

        <form action="" method="POST">

          <fieldset>

            <legend>Personal information:</legend>

            username:<br>

            <input type="text" name="username" value="<?php echo $username; ?>">

           <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            email:<br>

            <input type="text email" name="email" value="<?php echo $email; ?>">

            <br>

            password:<br>
            <input type="password" name="password" value=" <?php echo $password;?>"> 
            
            <br>

            confirmpassword:<br>

            <input type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>">

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?>