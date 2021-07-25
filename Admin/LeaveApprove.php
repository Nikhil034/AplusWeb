<?php

$con=mysqli_connect("localhost","root","","studentdb");

$id=$_GET['i'];

$s=mysqli_query($con,"select * from leavedata where id='$id'");
$col=mysqli_fetch_array($s);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Leave Approve And Delete</title>

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.responsive {
  width: 100%;
  height: auto;
}
</style>

</head>
<br>
<body>

	<div class="container">
 
  <div class="card">
    <div class="card-body">

    	<img src="Delete_Application.png" alt="Leave" class="responsive" width="600" height="400">
    	
    	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp 	<a href="DeleteLeave.php?i=<?php echo $col['id'];?>" class="btn btn-danger">Remove Leave</a>
    </div>
  </div>
</div>

</body>
</html>

<?php

//getting i variable value using GET method

  $id=$_GET['i'];

$con=mysqli_connect("localhost","root"," ","studentdb");


$de=mysqli_query($con,"UPDATE leavedata SET Status='Approve' where id=$id");




?>

