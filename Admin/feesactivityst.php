<style type="text/css">
  h3
  {
    background-color: yellow;
  }
  h3:hover
  {
    background-color: cyan;
  }
</style>
<?php

$con=mysqli_connect("localhost","root"," ","studentdb");

$s=mysqli_query($con,"select * from feesactivity");



?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Student 9th Fees Activity</h3>
  <p>Update when you take fees from student</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>RNo</th>
        <th>NAME</th>
        <th>DUE</th>
        <th>PAID</th>
        <th>TOTAL</th>
        <th>TIME</th>
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
   <td><?php echo $r['RollNo'];?></td> 
    <td><?php echo $r['Name'];?></td>  
    <td><?php echo $r['Due'];?></td>
    <td><?php echo $r['Paid'];?></td>
    <td><?php echo $r['Total'];?></td>
    <td><?php echo $r['Time'];?></td>
    

     <td>
        &nbsp &nbsp<a  href="feesactivityst.php?i=<?php echo $r['RollNo'];?>">U
     

    </tr>
  </a>
</td>


<?php
}
?>

  </table>

  </div>