<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>


<?php include 'connection.php';?>

<?php		
	

	$q = mysqli_query($con,"select * from studentninedata");
	$r = mysqli_fetch_row($q);

	if ($r)
	{
		$d = mysqli_query($con,"truncate table testingtb ");

		$f=mysqli_query($con,"truncate table ");

		$atten=mysqli_query($con,"truncate table ");
			
		if($d)
		{
			echo "<script>alert('All Data Delete Sucessfully');
			window.location.href='ninedata1.php';
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
window.location.href='ninedata1.php';
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
