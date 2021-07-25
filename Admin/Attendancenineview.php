<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Attendance 9th Class view</title>
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
    <div class="card-header"><h3>View Attendance</h3></div>
    <div class="card-body" style="padding: 0px;">
    	<form method="post">       
  					<table class="table table-hover">
    					<thead>
					    	<tr>
					        	<th>NO</th>
					       		<th>DATE</th>
					        	<th>VIEW</th>
					      	</tr>
					    </thead>


						<?php

							$q = mysqli_query($con,"select distinct Date from attendancenine");
							if($q->num_rows>0)
							{
								$i=0;
								while($val=$q->fetch_assoc())
								{
									$i++;
								
							
							
						?>

						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $val['Date']; ?></td>
							<td><a href="NineAttendanceShow.php?Date=<?php echo $val['Date'] ?>" class="btn btn-primary">
								
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                               <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                               <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                              </svg>
							</a></td>
						</tr>
						<?php }	}?>
					</table>
				</form>
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


