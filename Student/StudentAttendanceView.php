<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{

   $Mail=$_SESSION['emg'];
   
   echo $Mail."<br>";
  
   $id=mysqli_query($con,"select RollNo from studentninedata where Email='$Mail'");
   $id2=mysqli_query($con,"select Rollno from studentendata where Email='$Mail'");
   while ($row2 = $id->fetch_assoc())
    {
    $rn=$row2['RollNo']."<br>";
    echo $rn;
   }

   while($r3=$id2->fetch_assoc()){
   	$row3=$r3['Rollno']."<br>";
   	echo $row3;
   }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Attendance view</title>
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
    <br>
    <div class="card-body" style="padding: 0px;">
    	<form method="post">       
  					<table class="table table-hover">
    					<thead>
					    	<tr class="table table-primary">
					        	<th>NO</th>
					       		<th>DATE</th>
					        	<th>STATUS</th>
					      	</tr>
					    </thead>


						<?php

            if(isset($rn))
            {

							$q = mysqli_query($con,"select * from attendancenine where RollNo='$rn'");
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
							<td><?php echo $val['Value'];?></td>
						</tr>
						<?php }	} }?>

            <?php

            if(isset($row3))
            {

              $q = mysqli_query($con,"select * from attendanceten where RollNo='$row3'");
              if($q->num_rows>0)
              {
                $i=0;
                while($val2=$q->fetch_assoc())
                {
                  $i++;
                
              
              
            ?>

            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $val2['Date']; ?></td>
              <td><?php echo $val2['Value'];?></td>
            </tr>
            <?php } } }?>

					</table>
				</form>
    </div> 
    
  </div>
</div>

</body>
</html
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

