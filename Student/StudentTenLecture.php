<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{

 
   $Mail=$_SESSION['emg'];
  // echo $Mail;
    $s=mysqli_query($con,"select * from lectureten WHERE id BETWEEN 1 AND 2");

    $q=mysqli_query($con,"select *  from lectureten WHERE id BETWEEN 3 AND 4" );
 


   
?>




<!doctype html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Class 10th Lecture Schedule</title>
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





 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Morning Batch</a></li>
    <li><a href="#tabs-2">AfterNoon Batch</a></li>
  
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

<div id="tabs-2">


   <div class="card">
    <div class="card-body">


      
     <table class="table">
    <thead>

      <?php

    while($r=mysqli_fetch_array($q))
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
    
  <?php
  }
  ?>    

    </thead>
  
    <tbody>
    </tbody>
  </table>

</div> 

  </div>
 
 
</body>
</html>
<?php 
}



else
{
 
  header("location:http://localhost/AplusWeb/Student/StudentLoginHere.php");
?>




<?php
}
?> 