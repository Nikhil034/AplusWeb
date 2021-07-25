<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>

<?php include('connection.php');?>

<?php







$q=mysqli_query($con,"select * from leavedata where Mail='$mail' ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leave Detais Of Teacher</title>
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
    <div class="card-header bg-warning">Your Leave Details</div>
    <div class="card-body">

      <?php

      if($q)
      {

       while($row=mysqli_fetch_array($q))
       {

      ?>

       <table class="table table-bordered">
    <thead>
      <tr>
        <th>NAME</th>
        <td><?php echo $row['Name'];?></td>
      </tr>
      <tr>  
        <th>MAIL</th>
        <td><?php echo $row['Mail'];?></td>
      </tr>
      <tr>  
        <th>TITLE</th>
        <td><?php echo $row['Title'];?></td>
      </tr>
      <tr>  
        <th>REASON</th>
        <td><?php echo $row['Reason'];?></td>
      </tr>  
      <tr>
        <th>DATE</th>
        <td><?php echo $row['Date'];?></td>
        
      </tr>
       <tr>
        <th>STATUS</th>
        <td><?php echo $row['Status'];?></td>
        
      </tr>
      </tr>
      <?php
       }

      }
      ?>



       
    </thead>
    <tbody>
   
    </tbody>
  </table>
      






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



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?> 
