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

$s=mysqli_query($con,"select * from resultten where Rollno='$id'");
$col=mysqli_fetch_array($s);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Student View 10th Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br>

<div class="container">
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="ExamResultManage.php">Exam & Result</a></li>
    <li class="breadcrumb-item"><a href="SetResultTen.php">View Result</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Result</li>
  </ol>
</nav>
  <div class="card" style="margin-top: 2px;">
    
    <div class="card header">
  <h2>Result Show</h2>
  <br>
  


  <div class="card-body" style="padding:0px;">  

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-hover">
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
        <th>SUBJECT</th>
        <td><?php echo $col[3];?></td>
      </tr>  
       <tr>
        <th>MARK</th>
        <td><?php echo $col[4];?></td>
      </tr>  
       <tr>
        <th>TOTAL</th>
        <td><?php echo $col[5];?></td>
      </tr>  
       <tr>
        <th>DATE</th>
        <td><?php echo $col[6];?></td>
      </tr>   
                

    </thead>
    <tbody>
    </tbody>
    

</table>

    <div class="container">
    <a href="UpdateResultTen.php?i=<?php echo $col['Rollno'];?>"><button type="button" class="btn btn-info btn-lg btn-block responsive-width">
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
  echo "Plese Login Page";
?>



 <a href="AdminLoginhere.php" >Login First</a>
<?php
}
?> 

