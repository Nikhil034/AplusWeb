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
  <title>Add New Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="teacherdata.php">Teacher</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add</li>
  </ol>
</nav>
 
  <form action="" method="post">
    <div class="form-group">

        

      <h2>For Personal Data </h2>

      <label for="rollno">ID</label>
      <input type="number" class="form-control"  placeholder="Set User ID(optional)" name="rn" required="">

      <label for="name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name " name="nm1" required="">

      <label for="email">Email</label>
      <input type="email" class="form-control"  placeholder="Enter Email " name="em1" required="">

      <label for="password">Password</label>
      <input type="password" class="form-control"  placeholder="Enter password " name="pw" required="">

      <label for="age">AGE</label>
      <input type="number" class="form-control"  placeholder="Enter age" name="ag" required="">

      <label for="subject">SUBJECT</label>
      <input type="text" class="form-control"  placeholder="Enter Taken subject" name="sb" required="">

      <label for="Salary">SALARY</label>
      <input type="number" class="form-control"  placeholder="Enter Pay Salary" name="sl" required="">

      <label for="phoneno">PHONE</label>
      <input type="number" class="form-control"  placeholder="Enter Phoneno" name="pn" required="">

      <label for="address">Address</label>
    <textarea class="form-control" id="" rows="3" name="ad" required="" placeholder="Enter Address"></textarea>


     



   <br>

   <input type="submit" class="btn btn-success" value="Done" name="dn">
   
    




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
  $age=$_POST['ag'];
  $sb=$_POST['sb'];
  $sal=$_POST['sl'];
  $pn=$_POST['pn'];
  $add=$_POST['ad'];


 
  $q=mysqli_query($con,"insert into teacherdata (User_id,Name,Email,Password,Age,Subject,Salary,Phoneno,Address)values('$rn','$nm','$em','$ps','$age','$sb','$sal','$pn','$add')");

  if($q)
  {
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> New Teacher Add Succesfull
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




