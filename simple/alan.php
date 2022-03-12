<html>
    <head><title>
      registration  
    </title></head>
    <script type="text/javascript">
    function vForm(){
      var fname = document.getElementById("fn").value;
      var lname = document.getElementById("ln").value;
      var email = document.getElementById("em").value;
      var num = document.getElementById("mn").value;
      var usn = document.getElementById("un").value;
      var pass = document.getElementById("p1").value;
      var cp = document.getElementById("p2").value;

      if (fname == ""){
        alert("first name must be filled out");
        return false;
    }
     if (lname == ""){
        alert("last name must be filled out");
        return false;
    }
     if(email == ""){
        alert("email must be filled out");
        return false;
     }
     else{
        var reg=/^\w+@[a-zA-Z]+?.[a-zA-Z]{2,3}$/;
        var result= reg.test(email);
        if(result==false) 
        {
        alert("You have entered an invalid email address!"); 
        return false;
        }
    }
    if (num == "" || isNaN(num)){
        alert("mobile number must be filled out and it must be number");
        return false;
    }

     if (usn == ""){
        alert("username must be filled out");
        return false;
    }

     if (pass == ""){
        alert("password must be filled out");
        return false;
    }
     if(pass!=cp){
        alert("password doesn't match")
        return false;
    }
    
        return true;
}
     
      
  </script>
    <body background="regb3.1.jpg" TEXT="#E5E4E2"><br><br><br>
<div style=position:absolute;left:15px;top:15px;><a href=home.php ><img src="Home.png" ></a> </div>  
  <div style=position:absolute;left:690px;top:100px>
      <center><H4>REGISTER HERE</H4></center><BR><small><small>

      <form name="regform" action="insert.php" method="POST" onsubmit="return vForm()">
      
      <table border="3">
        <tr><td >First Name</small> </td> <td><input  type=text name="r1" id="fn" placeholder="first name"></td></tr>
          <tr><td>Last name  </td> <td><input  type=text name="r2" id="ln" placeholder="last name"></td></tr>
            <tr><td>email  </td><td><input  type=text name="r3" id="em" placeholder="email"></td></tr>
              <tr><td>Mobile number  </td><td> <input  type=text name="r4" id="mn" placeholder="mobile number"></td></tr>
                <tr><td>Username  </td> <td><input  type=text name="r5" id="un" placeholder="username"></td></tr>
                  <tr> <td>Password     </td><td> <input  type=text name="r6" id="p1" placeholder="password"></td></tr>
               &nbsp&nbsp&nbsp<tr><td>Confirm password  </td> <td><input type=text id="p2" placeholder="confirm password"></td></tr></table>
                <BR><br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="submit" name="save" value="submit">
                <HR><br><br>
                 </form> 
                
                </div></small></small>
  <div style=position:absolute;background-image:url(./reg4.jpg);height:450px;width:450px;left:172px;></div>
  <!--<div style=position:absolute;left:680px;top:350px;><BR>
  For new users  &nbsp&nbsp&nbsp <a href="reg.html" style=color:rgb(247,246,245);>CLICK HERE</a>  &nbsp&nbsp&nbsp for registration
  </div>-->
<center>
  <img src="regb3.jpg" height="450px" width="900px"></center>
</body></html>





    </body></html>