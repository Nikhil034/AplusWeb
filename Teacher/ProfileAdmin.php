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

$s=mysqli_query($con,"select * from admindata where User_id='$id'");
$col=mysqli_fetch_array($s);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Profile View</title>
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
  <h3 style="background-color: orange">Details Of,<?php echo $col[1];?></h3>

  <br>
  


  <div class="card-body" style="padding:0px;">  

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <td><?php echo $col[0];?></td>
      </tr>  
         <tr>
        <th>NAME</th>
        <td><?php echo $col[1];?></td>
      </tr>  
       <tr>
        <th>EMIAL</th>
        <td><?php echo $col[2];?></td>
      </tr>  
      
       <tr>
        <th>PHONE</th>
        <td><?php echo $col[4];?></td>
      </tr>   
       <tr>
        <th>ADDRESS</th>
        <td><?php echo $col[5];?></td>
      </tr>  
     
                

    </thead>
    <tbody>
    </tbody>
    

</table>

<br>

    

   

  </a>
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
