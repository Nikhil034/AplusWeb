<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>

	<div class="container" style="margin-top: 1px;">
			<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="TakeAttendance.php">Attendance</a></li>
    <li class="breadcrumb-item active" aria-current="page">10th Class</li>
  </ol>
</nav>
		<div class="panel panel-default">
		<div class="panel-heading">
			<h4 style="text-align: center;">Take Attendance</h4>
		</div>
		<div class="panel-body">
		
			
			<a href="Attendancetenview.php" class="btn btn-primary">view</a>&nbsp<?php echo date('y-m-d')?>
	

			<form method="post">
				<table class="table">
					<thead>
						<tr>
							<th>RollNo</th>
							<th>Name</th>
							<th>Attendance</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$q = mysqli_query($con,"select * from studentendata isDeleted=0");
							while ($show = mysqli_fetch_assoc($q)){


						?>
						<tr>
							<td><?php echo $show['Rollno']; ?></td>
							<td><?php echo $show['Name']; ?></td>
							<td>
								P <input required type="radio" name="at[<?php echo $show['Rollno']; ?>]" value="Present" checked>
								A <input required type="radio" name="at[<?php echo $show['Rollno']; ?>]" value="Absent">
							</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
				<center>
	<input type="submit" name="sub" value="Submit" style="text-align: center;" class="btn btn-primary">
	 <a href="TakeAttendance.php" class="btn btn-danger">Cancel
     
     </a>
</center>

			</form>
			<?php
				if(isset($_POST['sub']))
				{
					$att = $_POST['at'];
					$date = date('d-m-y');
					$r = mysqli_query($con,"select distinct Date from attendanceten");
					$b=false;
					//$ok = mysqli_num_rows($con,$r);
					//print($ok);
					if($ok=mysqli_num_rows($r) > 0)
					{
						while($check = mysqli_fetch_assoc($r))

						{
							if($date==$check['Date'])
							{
								$b=true;
								echo "<script>alert('Attendance already taken today!!')</script>";
							}
						}
					}
					if(!$b)
					{
						foreach ($att as $key => $value)
						{
							if ($value == "Present")
							{
								$q = mysqli_query($con,"insert into attendanceten(RollNo,Date,Value) values($key,'$date','Present')");
							}
							else
							{
								$q = mysqli_query($con,"insert into attendanceten(RollNo,Date,Value) values($key,'$date','Absent')");
							}
						}
						if($q > 0)
						{
							echo "<script>alert('Attendance taken successfully!!')</script>";
						}
						else
						{
							echo "<script>alert('Attendance taken not successfully!!')</script>";
						}
					}
				}
			?>
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

