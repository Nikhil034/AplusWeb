<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=submit]{
  font-size: 20px;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:orange;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 15px;
}

.registerbtn:hover {
  opacity: 1;
  transition: 1.5s;
  background-color: green;

}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

  <br><br>
  <br><br><hr>


<form action=" " method="post" autocomplete="off">
  <div class="container">

    <p>Please fill in this form to login an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="eml" id="ema" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="psw" required>

   
    <hr>


    <input type="submit" class="registerbtn" value="Login" name="login">
  </div>
  
  
</form>

</body>
</html>

<?php




if(isset($_POST['login']))
{
 


 $em=$_POST['eml'];
 $ps=$_POST['pass'];

 $con=mysqli_connect("localhost","root","","aplusweb");

 $emlte=mysqli_real_escape_string($con,$em);
 $pste=mysqli_real_escape_string($con,$ps);

   $isValid = filter_var($emlte, FILTER_VALIDATE_EMAIL);

 if(!$isValid)
 {
  echo "Valid Email";
 }
 else{
  echo "Plese Input A Valid Email";
 }






 $sq=mysqli_query($con,"select * from teacherdata where Email='$emlte' and Password='$pste'");

 

if($ok=mysqli_fetch_array($sq))
     {

      $_SESSION['eml']=$emlte;

      
      
      header("location:http://localhost/AplusWeb/Teacher/");
     }

  else   
     
     {
    
       echo "<br><div class='alert alert-danger'>
    <strong>Fail!</strong> Error Occur
  </div>";
     }

}

?>
