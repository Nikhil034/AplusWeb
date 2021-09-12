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

$s=mysqli_query($con,"select * from showevent where DateE='$id'");
$col=mysqli_fetch_array($s);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Event View</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="card" style="margin-top: 2px;">
    
    <div class="card header">
  <h2>Event At,<?php echo $col[4];?></h2>
  


  <div class="card-body" style="padding:0px;">  

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <td><?php echo $col[0];?></td>
      </tr>  
         <tr>
        <th>TITLE</th>
        <td><?php echo $col[1];?></td>
      </tr>  
       <tr>
        <th>DESCRIPTION</th>
        <td><?php echo $col[2];?></td>
      </tr>  
       <tr>
        <th>DATE</th>
        <td><?php echo $col[4];?></td>
      </tr>  
     

    </thead>
    <tbody>
    </tbody>
    

</table>

    <div class="container">
   
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

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
