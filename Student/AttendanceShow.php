<?php

session_start();

if(isset($_SESSION['emg']))
{

   $Mail=$_SESSION['emg'];
?>

<style type="text/css">

img.avt
	{
  width: 50%;
  border-radius: 350%;
  display: block;
  margin-left: auto;
  margin-right: auto;

}

</style>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Attendance Show</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<br>
 
<div class="container">

  <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">
    	
    	<div class="card">
  <img src="assets\back-to-school.svg" alt="Avatar" class="avt" style="width:50%">
  <div class="container">

  	<div class="d-flex p-2 bg-primary text-white"> 

  		ROLL
   
  </div>
  <br>

  	<div class="d-flex p-2 bg-primary text-white">  

  		NAME:-
   
  </div>
  <br>

  	<div class="d-flex p-2 bg-primary text-white">  

  		STATUS:-
   
  </div>
  <br>

   
  </div>
</div>
    </div> 
    <div class="card-footer"></div>
  </div>
</div>
​
</body>
</html>
​



<?php 
}

else
{
  echo "Plese Login Page";
?>



 <a href="StudentLoginHere.php" >Login First</a>
<?php
}
?> 
