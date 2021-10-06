<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>


<?php include('connection.php');?>
<?php



$s=mysqli_query($con,"select * from timetableten where isSeted=0");



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
      <tr class=" ">
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
          &nbsp<a href="TenResultSet.php?i=<?php echo $r['Sno'];?>">Set</a>
        </td>
        <td>
          <a href="EditTimeTableTen.php?i=<?php echo $r['Sno'];?>">U</a>

                
        </td>

   </tr>

    <?php
}

?>

    </div> 
  </table>


    <div class="card-footer">


        
         <input type="submit" class="btn btn-info" value="Set Exam" formaction="NewExamTenCreate.php">
          <a href="ManageExamResult.php" class="btn btn-danger">Exit</a>
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



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?> 