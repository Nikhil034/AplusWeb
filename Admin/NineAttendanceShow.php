<?php

session_start();



if(isset($_SESSION['ema']))
{

?>



<?php include 'connection.php';?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">





 
</head>
<body>
<br><br>
<div class="container">
		<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="TakeAttendance.php">Attendance</a></li>
    <li class="breadcrumb-item"><a href="AttendanceNine.php">9th Class</a></li>
    <li class="breadcrumb-item"><a href="Attendancenineview.php">View</a></li>
    <li class="breadcrumb-item active" aria-current="page">Show Attendance</li>

  </ol>
</nav>


  	<div class="card">
  		<div class="card-header" align="center"><h5>View Attendance 9th</h5></div>
  		
  		
  		

  		<br>
    		<div class="card-body" style="padding: 0px;">
    		<form method="post">
				<table class="table">
					<thead>

						<tr class="table table-info">
							<th>RNo</th>
							<th>Name</th>
							<th>Status</th>
							<th>Edit</th>
						</tr>
					</thead>

					<?php

						if($_GET['Date'])
						{
							$date=$_GET['Date'];
						
						$q = mysqli_query($con,"select studentninedata.*,attendancenine.*
							from attendancenine inner join studentninedata on attendancenine.RollNo=studentninedata.RollNo and attendancenine.Date='$date' where isDeleted=0");
						if($q->num_rows>0)
						{
							$i=0;
							while($val=$q->fetch_assoc())
							{
								$i++;
							
						
						
					?>
				
			</form>

					<tr>
						
						<td><?php echo $val['RollNo']; ?></td>
						<td><?php echo $val['Name']; ?></td>
						<td><?php echo $val['Value']; ?></td>
					     <td>
                <form method="post" action="EditAttendanceNine.php">
                  <input type="hidden" name="rn" value="<?php echo $val['RollNo'];?>">
                  <input type="hidden" name="sbt" class="btn btn-primary" value="<?php echo $val['Value'];?>">
                  <input type="hidden" name="dt" value="<?php echo $date;?>" >
                  <input type="submit" name="mybtn" value="Change" class="btn btn-success">
                </td>
              </form>
  
					</tr>
					<?php }	} }?>
         
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



 <a href="StudentLoginHere.php" >Login First</a>
<?php
}
?> 

