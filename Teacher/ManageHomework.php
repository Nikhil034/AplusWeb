<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>

<?php include('connection.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HomeWork Managment</title>
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
    <form action="" method="post">
    <div class="card-header">Set New Homework for Student</div>
    <div class="card-body">
      
      <select class="form-select" aria-label="Default select example" name="selectclasshw">
  <option selected disabled="true">Choose Class</option>
  <option value="9">9</option>
  <option value="10">10</option>




</select>

 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<input  type="submit" class="btn btn-info" value="Get Class" name="hwbt">
</div>

    </div> 
    <div class="card-footer">
             &nbsp <input type="submit" class="btn btn-warning" value="Back Home" formaction="index.php"  >
    </div>
  </div>
</div>

</body>
</form>
</html>

 <?php

  if(isset($_POST['hwbt']))
  {
    
   
     $sb=$_POST['selectclasshw'];

     if(!$con)
     {
       echo"error";
     }
     else
     {

      if($sb==9)
      {

       header("location:HomeWorkSetNine.php");
     }
     else
     {
      header("location:HomeWorkSetTen.php");
     }
     
   }

  }
  ?>

  <?php 

}

else
{
  echo "Plese Login Page";
?>



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?> 
