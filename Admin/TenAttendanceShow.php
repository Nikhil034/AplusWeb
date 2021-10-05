<?php

session_start();


if(isset($_SESSION['ema']))
{

?>
<?php include 'connection.php';?>


<!DOCTYPE html>
<html lang="en">
<head>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<!--   <script>
  	$(document).ready(function()
  	{
  		$("#Search").on("keyup",function()
  		{
  			var value=$(this).val().toLowerCase();
  			$("#tb tr").filter(function()
  			{
  				$(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)

  			});

  		});
  	});

    
    $("button['#top']").click(function() 
    {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});




  </script> -->

</head>
<body>
<br>
<div class="container">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="TakeAttendance.php">Attendance</a></li>
    <li class="breadcrumb-item"><a href="attendanceten.php">10th Class</a></li>
    <li class="breadcrumb-item"><a href="Attendancetenview.php">View</a></li>
    <li class="breadcrumb-item active" aria-current="page">Show Attendance</li>

  </ol>
</nav>


  	<div class="card">
  		<div class="card-header"><h3>View Attendance 10th</h3></div>
  		<br>
  		
  		

  	
    	<div class="card-body" style="padding: 0px;">
    		<form method="post">
				<table class="table" id="atten">
					<thead>

						<tr class="table table-info">
						
							<th>RollNo</th>
							<th>Name</th>
							<th>Status</th>
              <th>Edit</th>
						</tr>
					</thead>

					<?php

						if($_GET['Date'])
						{
							$date=$_GET['Date'];
						
						$q = mysqli_query($con,"select studentendata.*,attendanceten.*
							from attendanceten inner join studentendata on attendanceten.RollNo=studentendata.Rollno and attendanceten.Date='$date' isDeleted=0");
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
              <form method="post" action="EditAttendanceTen.php">
                <input type="hidden" name="rn" value="<?php echo $val['RollNo'];?>">
                <input type="hidden" name="sbt" class="btn btn-primary" value="<?php echo $val['Value'];?>">
                <input type="hidden" name="dt" value="<?php echo $date;?>">
                <input type="submit" name="sbtn" class="btn btn-success" value="Change" id="btn">

              </form>
            </td>
            <!--<td><?php echo date('H:i:s Y-m-d');?></td>-->
					</tr>
					<?php }	} }?>
        
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


