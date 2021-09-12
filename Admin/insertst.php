<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br>

<div class="container">
  <br>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="ninedata1.php">9th Class</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Student</li>
  </ol>
</nav>
 
  <form action="" method="post" autocomplete="off">
    <div class="form-group">


       <h2>For Fees Detail</h2>

      <label for="rollno">RollNo</label>
      <input type="number" class="form-control"  placeholder="Set RollNo" name="rn1" required="">

      <label for="name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name " name="nm2" required="">

      <label for="">Paid</label>
      <input type="number" class="form-control"  placeholder="Enter paid Fess " name="pd" required="">

      <label for="">Remain</label>
      <input type="number" class="form-control"  placeholder="Enter Remain Fees " name="rm" required="">

      <label for="">Total</label>
      <input type="number" class="form-control"  placeholder="Enter Total Fees To Paid" name="Top" required="">

      <br>  

    

 
        

      <h2>For Personal Data </h2>

      <label for="rollno">RollNo</label>
      <input type="number" class="form-control"  placeholder="Set RollNo" name="rn" required="">

      <label for="name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name " name="nm1" required="">

      <label for="email">Email</label>
      <input type="email" class="form-control"  placeholder="Enter Email " name="em1" required="">

      <label for="password">Password</label>
      <input type="password" class="form-control"  placeholder="Enter password " name="pw" required="">

      <label for="Standard">Standard</label>
      <input type="number" class="form-control"  placeholder="Enter Standard" name="st" required="">

      <label for="sex">Sex</label>
      <input type="text" class="form-control"  placeholder="Enter Sex" name="se" required="">

      <label for="phoneno">Phoneno</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Phone number" name="pn" required="">

      <label for="address">Address</label>
    <textarea class="form-control" id="" rows="3" name="ad" required=""></textarea>


      <label for="phoneno">Status</label>
      <input type="number" class="form-control" placeholder="Set Student Status" name="sta" min="0" max="1" required="">



   <br>

   <input type="submit" class="btn btn-success" value="Done" name="dn">
   <input type="submit" class="btn btn-warning" value="Back" name="dn" formaction="ninedata1.php">
    




  </form>
</div>

</body>
</html>





<?php

if (isset($_POST['dn']))
  {
  $rn=$_POST['rn'];
  $nm=$_POST['nm1'];
  $em=$_POST['em1'];
  $ps=$_POST['pw'];
  $std=$_POST['st'];
  $se=$_POST['se'];
  $pn=$_POST['pn'];
  $ad=$_POST['ad'];
  $sta=$_POST['sta'];


  $rn=$_POST['rn1'];
  $name=$_POST['nm2'];
  $paid=$_POST['pd'];
  $rem=$_POST['rm'];
  $tot=$_POST['Top'];

  if($rn==0 && $nm==0){
    echo"<script>alert('Blanck Record Not Allowed')</script>";
  }




  $q=mysqli_query($con,"insert into studentninedata (Rollno,Name,Email,Password,Standard,Sex,Phone,Address,Status)values('$rn','$nm','$em','$ps','$std','$se','$pn','$ad','$sta')");

  $q=mysqli_query($con,"insert into feesactivity(Rollno,Name,Paid,Remain,Total)values('$rn','$name','$paid','$rem','$tot')");

  if($q)
  {
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> New Student Add Succesfull
  </div>";
  }
  else
  {
    echo "<div class='alert alert-danger'>
    <strong>Fail!</strong> Error Occur
  </div>";
  }
  
  
 }
?>



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
