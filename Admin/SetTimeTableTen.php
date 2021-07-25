<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>


<?php include 'connection.php';?>


<?php



$s=mysqli_query($con,"select * from timetableten");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Class 10th TimeTable Set</title>
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
    <div class="card-header">
      Set Time Table
    </div>
    <form action="" method="post">
    <div class="card-body">
       <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr class="table table-primary ">
        <th>SNo</th>
        <th>SUBJECT</th>
        <th>DATE</th>
        <th>MARKS</th>
        <th>RESULT</th>
        <th>EDIT</th>
        
       
      </tr>
    </thead>
    <tbody>
    </tbody>

    <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>
   <tr>
     <td><?php echo $r['Sno'];?></td>
      <td><?php echo $r['Subject'];?></td>
       <td><?php echo $r['Date'];?></td>
        <td><?php echo $r['Marks'];?></td>
        <td>
          &nbsp<a href="NewResultSetTen.php?i=<?php echo $r['Sno'];?>" class="btn btn-primary">

               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>

            

          </a>
        </td>
        <td>
          <a href="updatetimetabletten.php?i=<?php echo $r['Sno'];?>" class="btn btn-success">

            
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
            


          </a>

                
        </td>

   </tr>

    <?php
}

?>

    </div> 
  </table>


    <div class="card-footer">


        
         <input type="submit" class="btn btn-info" value="Set Exam" formaction="NewTimeTablecreateTen.php">
          <a href="ExamResultManage.php" class="btn btn-danger">Exit</a>
    </div>
  </div>
</div>
​
</body>
</html>
​
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
