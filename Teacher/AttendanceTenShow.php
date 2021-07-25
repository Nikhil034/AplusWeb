<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>
<?php include('connection.php');?>

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
<br><br> 
<div class="container">


  	<div class="card">
  		<div class="card-header"><h3>View Attendance 10th</h3></div>
  		<br>
  		
  	

  		<br>
    	<div class="card-body" style="padding: 0px;">
    		<form method="post">
				<table class="table" id="atten">
					<thead>

						<tr class="table table-primary">
					
							<th>RollNo</th>
							<th>Name</th>
							<th>Status</th>
						</tr>
					</thead>

					<?php

						if($_GET['Date'])
						{
							$date=$_GET['Date'];
						
						$q = mysqli_query($con,"select studentendata.*,attendanceten.*
							from attendanceten inner join studentendata on attendanceten.RollNo=studentendata.Rollno and attendanceten.Date='$date'");
						if($q->num_rows>0)
						{
							$i=0;
							while($val=$q->fetch_assoc())
							{
								$i++;
							
						
						
					?>

					<tr>
						
						<td><?php echo $val['RollNo']; ?></td>
						<td><?php echo $val['Name']; ?></td>
						<td><?php echo $val['Value']; ?></td>
					</tr>
					<?php }	} }?>
				</table>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#atten').DataTable();
</script>
			</form>	
    	</div> 
    </div>

    
     
     </a>
</div>

</body>
</html>
 <?php 

}

else
{
  echo "Plese Login Page";
?>



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?> 

