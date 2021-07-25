<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>


<?php include 'connection.php';?>


<?php		
	

	$q = mysqli_query($con,"select * from studentendata`");
	$r = mysqli_fetch_row($q);

	if ($r)
	{
		$d = mysqli_query($con,"truncate table studentendata`") or die(mysqli_error());
			
		if($d)
		{
			echo "<script>alert('All Data Delete Sucessfully');
			window.location.href='tendata.php';
			</script>";
		}
		else
		{
			echo "<script>alert('Conection Problem');
			</script>";
		}
	}
	else
	{



echo "<script>
alert('There Are  No Data Available In Table');
window.location.href='tendata.php';
</script>";
	}
?> 

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


