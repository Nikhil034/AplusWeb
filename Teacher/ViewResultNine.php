<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>


<?php include('connection.php');?>

<?php



$id=$_GET['i'];

$s=mysqli_query($con,"select distinct  Rollno,Name,Mark from resultnine where Date_Ex='$id'");




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>9th student Result</title>
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
    <form action="">
    <div class="card-header">Set Result </div>
    <div class="card-body">

       <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr class="table table-primary ">
        <th>RNo</th>
        <th>NAME</th>
        <th>MARK</th>
        <th>VIEW</th>
     
       
      </tr>
    </thead>
    <tbody>
    </tbody>


    <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>
   <tr>
     <td><?php echo $r['Rollno'];?></td>
     <td><?php echo $r['Name'];?></td>
     <td><?php echo $r['Mark'];?></td>
    
      <td>
        &nbsp <a  href="ResultNineView.php?i=<?php echo $r['Rollno'];?>" class="btn btn-info">

          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
     
   </tr>
      
    <?php
}
?>

</table>
   
  </div>
  <div class="card-footer">


      
     

         
    </div>
</div>

</body>
</html>
</a>
</td>
</tr>

</div>
</div>
</form>

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
