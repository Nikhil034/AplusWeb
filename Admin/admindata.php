<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>

<?php



$s=mysqli_query($con,"select * from admindata");



?>
<style type="text/css">
  hr
  {
     background-color: orange;



  }


</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 

  <br>
  <br>

  <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>
 
<div class="container">

  <div class="card">
    <div class="card-body">
      






  &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<img class="card-img-top" src="admin.png" alt="admin image" style="width:65%" >  <hr style="border-width: 10px ">

    <div class="card-body">

  
      <b class="card-text">Welcome Admin Here,is Your Profile </b>
      <br>
      <br>
     <!--  <a href="#" class="btn btn-primary">See Profile</a> -->

         <a href="AdminProfile.php?i=<?php echo $r['User_id'];?>" class="btn btn-primary">Show Profile
         </a></td>
    </div>

    <?php
  }
  ?>










    </div>
  </div>
</div>


​
</body>
</html>
  <?php 
}



else
{
  echo "Plese Login Page";
?>



 <a href="AdminLoginhere.php" >Login First</a>
<?php
}
?> 

​
