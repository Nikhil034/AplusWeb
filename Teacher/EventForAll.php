<?php

$con=mysqli_connect("localhost","root","","studentdb");

$s=mysqli_query($con,"select * from showevent");



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

        <form method="post">
      
      <label for="EvenTitle">Enter Event Title</label>
      <input class="form-control" type="text"  name="et">
      <br>

      <div class="form-group">
    <label for="">Enter Event Description</label>
    <textarea class="form-control"  rows="3" name="ed"></textarea>
  </div>
      <br>

      <label for="pickdate">Set Date For Event</label>

      <input class="form-control" type="date" placeholder="Set Date" name="end" value="">
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

$con=mysqli_connect("localhost","root","","studentdb");

$et=$_POST['et'];
$ed=$_POST['ed'];
$edt=$_POST['end'];

$q=mysqli_query($con,"insert into showevent(Title,Description,Date)values('$et','$ed','$edt')");





}
?>



<div class="container">
 
  <div class="card">
    <div class="card-header">Your Set Event Show Below</div>
    <div class="card-body">
      
        <table class="table table-bordered">
    <thead>
      <tr class="bg-info text-white">
        <th>DATE</th>
        <th>TITLE</th>
        <th>DESCRIPTION</th>
   
      </tr>
    </thead>
    <tbody>
      
    </tbody>
    
     <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>

   <tr>
     <td><?php echo $r['Date'];?></td>
       <td><?php echo $r['Title'];?></td>
         <td><?php echo $r['Description'];?></td>
         
   </tr>
<?php
}
?>
  </table>
</div>

    </div> 
    <div class="card-footer">
       &nbsp &nbsp <input type="submit" class="btn btn-warning" value="Back Home" formaction="index.php"  >

    </div>
  </div>
</div>
​
</body>
</form>
</html>
​