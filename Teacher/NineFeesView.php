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

$s=mysqli_query($con,"select * from feesactivity where Rollno='$id'");
$col=mysqli_fetch_array($s);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Fees View 9th Class</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br>

<div class="container">
  <div class="card" style="margin-top: 2px;">
    
    <div class="card header">
  <h4>Fees Data of <?php echo $col[2];?></h4>
  


  <div class="card-body" style="padding:0px;">  

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>RNo</th>
        <td><?php echo $col[1];?></td>
      </tr>  
         <tr>
        <th>NAME</th>
        <td><?php echo $col[2];?></td>
      </tr>  
       <tr>
        <th>REMAIN</th>
        <td><?php echo $col[3];?></td>
      </tr>  
       <tr>
        <th>PAID</th>
        <td><?php echo $col[4];?></td>
      </tr>  
       <tr>
        <th>TOTAL</th>
        <td><?php echo $col[5];?></td>
      </tr>  
       <tr>
        <th>DATE/TIME</th>
        <td><?php echo $col[6];?></td>
      </tr>  
     

    </thead>
    <tbody>
    </tbody>
    

</table>

    <div class="container">
    <a href="UpdateFeesNine.php?i=<?php echo $col['Rollno'];?>"><button type="button" class="btn btn-info btn-lg btn-block responsive-width">
        UPDATE
    </button>

    <br>

   
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
   header("location:TeacherLogin.php");
?>



 
<?php
}
?> 
