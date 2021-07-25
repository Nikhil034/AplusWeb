<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<?php


$s=mysqli_query($con,"select * from inquerypeople");



?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="card-header">Inquery Of People
     </div>
    <div class="card-body">

       <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr class="table table-primary">
        <th>No</th>
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
     <td><?php echo $r['Noid'];?></td>
     <td><?php echo $r['Name'];?></td>
     <td>
       <a href="ShowInquery.php?i=<?php echo $r['Noid'];?>" class="btn btn-primary">


        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg>
         

       </a>
     </td>
     
      
    <?php
}
?>

</table>
   
  </div>
  <div class="card-footer">
      
         <input type="submit" class="btn btn-warning" value="Back Home" formaction="index.php "  >
         &nbsp &nbsp<a href="InqueryBypeople.php" class="btn btn-primary">ADD</a>
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



 <a href="AdminLoginhere.php" >Login First</a>
<?php
}
?> 
