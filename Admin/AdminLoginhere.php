

<?php include 'connection.php';?>



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

input[type=email
]:focus, input[type=password]:focus {
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

<!--   <script>
function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script> -->
</head>
<body>

  <br><br>
  <br><br><hr>


<form action=" " method="post" autocomplete="off">
  <div class="container">

    <p>Please fill in this form to login an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="ema" id="ema" required >

    <div >
    <label for="psw"><b>Password</b> </label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <!-- <input type="checkbox"  onclick="myFunction()"> -->
  </div>

   
    <hr>


    <input type="submit" class="registerbtn" value="Login" name="adlogin">
  </div>
  
  
</form>

</body>
</html>



<?php




if(isset($_POST['adlogin']))
{
 
 session_start();

 $em=$_POST['ema'];
 $ps=$_POST['psw'];

 $isValid = filter_var($em, FILTER_VALIDATE_EMAIL);

 if($isValid)
 {
  echo "Valid Email";
 }
 else{
  echo "Plese Input A Valid Email";
 }






 $sq=mysqli_query($con,"select * from admindata where Email='$em' and Code='$ps'");

 

if($ok=mysqli_fetch_array($sq))
     {

      $_SESSION['ema']=$em;
      
      header("location:http://localhost/AplusWeb/Admin/index.php");
     }

  else   
     
     {
    
       echo "<br><div class='alert alert-danger'>
    <strong>Fail!</strong> Check Your Password !
  </div>";
     }

}

?>

