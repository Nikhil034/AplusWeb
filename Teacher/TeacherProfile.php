<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>

<?php include('connection.php');?>


<?php


$s=mysqli_query($con,"select * from teacherdata");



?>


 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Data</title>
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
 
<div class="container">
 
  <div class="card">
    <div class="card-header">
    	
       Teacher Data Here
    </div>


    <div class="card-body">

     
      <div class="table-responsive">  
  <form method="post">        
  <table class="table">
    <thead>
      <tr class="">
      
        <th>USER</th>
        <th>NAME</th>
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
   <td><?php echo $r['User_id'];?></td> 
    <td><?php echo $r['Name'];?></td>  
    <td><a href="TeacherView.php?i=<?php echo $r['User_id'];?>" class="btn btn-primary">
      
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>


    </a></td>
    

    </tr>
  </a>
</td>


<?php
}
?>

  </table>

</form>

  </div>
</div>

   

    </div> 
     <div class="card-footer">Tap To View Show Teacher Data</div>
   
  </div>
</div>

</body>

</body>
</html>

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

