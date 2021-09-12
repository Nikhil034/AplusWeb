<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<?php


$s=mysqli_query($con,"select * from lecturenine WHERE id BETWEEN 1 AND 2");



?>




<!doctype html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Class 9th Lecture Schedule</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
  <br>



 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">9th Lecture</li>
  </ol>
</nav>

 
<div id="tabs">

  <ul>
    <li><a href="#tabs-1">AfterNoon Batch</a></li>
 
  </ul>


  <div id="tabs-1">

  <div class="card">
    <div class="card-body">


      
     <table class="table">
    <thead>

      <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>
      <tr class="table table-primary">
        <th>LNO</th>
        <td><?php echo $r['id'];?></td>
      </tr>
      <tr>  
        <th>TIME</th>
        <td><?php echo $r['Time_Lec'];?></td>
      </tr>
      <tr>  
        <th>MON</th>
        <td><?php echo $r['Monday'];?></td>
      </tr>
      <tr>  
        <th>TUE</th>
        <td><?php echo $r['Tuesday'];?></td>
      </tr>
      <tr>  
        <th>WED</th>
        <td><?php echo $r['Wednesday'];?></td>
      </tr>
      <tr>
        <th>THU</th>
        <td><?php echo $r['Thursday'];?></td>
      </tr>
       <tr>
        <th>FRI</th>
        <td><?php echo $r['Friaday'];?></td>
      </tr>
       <tr>
        <th>SAT</th>
        <td><?php echo $r['Saturday'];?></td>
      </tr>
      <tr>
        <th>EDIT</th>
        <td><a href="EditLectureNine.php?i=<?php echo $r['id'];?>" class="btn btn-success text-white" >EDIT</a></td>
      </tr>
  <?php
  }
  ?>    

    </thead>
  
    <tbody>
    </tbody>
  </table>

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
