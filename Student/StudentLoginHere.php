<?php include('connection.php');?>
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
  opacity: 100;
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
img.avatar 
  {
  width: 50%;
  border-radius: 350%;
  display: block;
  margin-left: auto;
  margin-right: auto;

}
</style>
</head>
<body>

  <br><br>
  <br><br><hr>


<form action=" " method="post" autocomplete="off">
  <div class="container">

    <img src="Avatar.jpg" class="avatar">

    <p>Dear,Student Fill Your Detail Properly</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="emg" id="ema" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

   
    <hr>


    <input type="submit" class="registerbtn" value="Login" name="stlogin">
  </div>
  
  
</form>

</body>
</html>

<?php



if(isset($_POST['stlogin']))
{
 
 $em=$_POST['emg'];
 $ps=$_POST['psw'];

 $emlst=mysqli_real_escape_string($con,$em); //it used to remove all special character from input string
 $psst=mysqli_real_escape_string($con,$ps);



  $isValid = filter_var($em, FILTER_VALIDATE_EMAIL);

 if($isValid)
 {
  echo "";
 }
 else{
  echo "Plese Input A Valid Email";
 }


 $query = mysqli_query($con,"SELECT Email,Password
    FROM studentninedata
    WHERE Email='$emlst' AND Password='$psst' 
    UNION 
    SELECT Email,Password
    FROM studentendata 
    WHERE Email='$emlst' AND Password='$psst'");

 


  if($valid=mysqli_fetch_array($query))


     {

     
     echo $_SESSION['emg']=$emlst;
      
     header("location:http://localhost/AplusWeb/Student/");
     }
  else   
     
     {
    
       echo "<br><div class='alert alert-danger'>
    <strong>Fail!</strong> Check Password or Email Please
  </div>";
     }



}

?>
