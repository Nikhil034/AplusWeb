<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<?php



$s=mysqli_query($con,"select DISTINCT Title,Description,DateE from showevent");



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Managment</title>
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
      Set New Event
    </div>
    <div class="card-body">
      <div class="card-body">

        <form method="post" autocomplete="off">
      
      <label for="EvenTitle">Enter Event Title</label>
      <input class="form-control" type="text"  name="et" required="">
      <br>

      <div class="form-group">
    <label for="">Enter Event Description</label>
    <textarea class="form-control"  rows="3" name="ed" required=""></textarea>
  </div>
      <br>

       <label for="EvenTitle">For Whom</label>
      <input class="form-control" type="text"  name="who" required="">

      <br>

      <label for="pickdate">Set Date For Event</label>

      <input class="form-control" type="date" placeholder="Set Date" name="end" value="" required="">
    </div> 
   

    </div> 
    <div class="card-footer">
      
     
  &nbsp &nbsp <input type="submit" class="btn btn-info" value="Set Event" name="stevent" formaction=" ">

        
    </div>
  </div>
</div>

<br>


<?php

if(isset($_POST['stevent']))
{


$et=$_POST['et'];
$ed=$_POST['ed'];
$w=$_POST['who'];
$edt=$_POST['end'];

$q=mysqli_query($con,"insert into showevent(Title,Description,Who,DateE)values('$et','$ed','$w','$edt')");
 
 if($q){
  echo"<script>alert('Event Declare Succesfully')</script>";
 }else{
  echo"<script>alert('Event Declare Fail')</script>";
 }





}
?>



<div class="container">
 
  <div class="card">
    <div class="card-header">Your Set Event Show Below</div>
    <div class="card-body">
      
        <table class="table table-bordered" id="sdt">
    <thead>
      <tr class="bg-info text-white">
        <th>DATE</th>
        <th>VIEW</th>
       
   
      </tr>
    </thead>
    <tbody>

     <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>

   <tr>
     <td><?php echo $r['DateE'];?></td>
      <td>
        <a href="EventView.php?i=<?php echo $r['DateE'];?>" class="btn btn-primary">
          
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
  $('#sdt').DataTable();
</script>
</div>

    </div> 
    <div class="card-footer">
       &nbsp &nbsp <a href="index.php" class="btn btn-warning">Home</a>

    </div>
  </div>
</div>
​
</body>
</form>
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

​