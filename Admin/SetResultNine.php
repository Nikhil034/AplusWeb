<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<?php


$id=$_GET['i'];

// $q=mysqli_query($con,"select * from timetablenine where Date='$id'");

// $col=mysqli_fetch_array($q);
$s=mysqli_query($con,"select Distinct Rollno,Name,Mark from resultnine where Date_Ex='$id'");



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
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="ExamResultManage.php">Exam & Result</a></li>
     <li class="breadcrumb-item"><a href="Resultnine.php">9th Result</a></li>
    <li class="breadcrumb-item active" aria-current="page">View Result</li>
  </ol>
</nav>

  <div class="card">
    <form action="">
    <div class="card-header">Student Result List</div>
    <div class="card-body">

       <div class="table-responsive">          
  <table class="table" id="res">
    <thead>
      <tr class="table table-primary ">
        <th>RNo</th>
        <th>NAME</th>
        <th>MARK</th>
        <th>VIEW</th>
        
       
      </tr>
    </thead>
    <tbody>
   


    <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>
   <tr>
     <td><?php echo $r['Rollno'];?></td>
     <td><?php echo $r['Name'];?></td>
     <td><?php echo $r['Mark'];?></td>
      <td>
        &nbsp &nbsp<a  href="ViewResultNine.php?i=<?php echo $r['Rollno'];?>" class="btn btn-success">
          
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
         <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
       </svg>

        </a>
      </td>  
     
   </tr>

      
    <?php
}
?>
</tbody>


</table>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#res').DataTable();
</script>
   
  </div>
  <div class="card-footer">


      
     

        <a href="Resultnine.php" class="btn btn-danger">Back</a>

         
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

