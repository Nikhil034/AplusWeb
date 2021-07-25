<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>


<?php



$id=$_GET['i'];

$s=mysqli_query($con,"select * from leavedata where id='$id'");
$col=mysqli_fetch_array($s);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Leave Details of Class</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
  <br>

<div class="container">
  <div class="card" style="margin-top: 2px;">
    
    <div class="card header">

  


  <div class="card-body" style="padding:0px;">  

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-bordered">
    <thead>
      <form method="post">
      <tr>
        <th>NO</th>
        <td><input type="text" name="nid" value="<?php echo $col[0];?>"></td>
      </tr>  
         <tr>
        <th>NAME</th>
        <td><?php echo $col[1];?></td>
      </tr>  
       <tr>
        <th>EMAIL</th>
        <td><?php echo $col[2];?></td>
      </tr>  
       <tr>
        <th>TITLE</th>
        <td><?php echo $col[3];?></td>
      </tr>  
       <tr>
        <th>REASON</th>
        <td><?php echo $col[4];?></td>
      </tr>  
      <tr>
        <tr>
        <th>DATE</th>
        <td><?php echo $col[5];?></td>
      </tr>  
      <tr>
        <th>STATUS</th>
        <td><input type="text" name="status" placeholder="Yes/No For Leave"></td>
      </tr>
       
       

    </thead>
    <tbody>
    </tbody>
    

</table>

    <div class="container">
    <button type="submit" class="btn btn-success btn-lg btn-block responsive-width" name="sb">SUBMIT</button>

  </form>

  <?php

  if(isset($_POST['sb']))
{


$st=$_POST['status'];
$id=$_POST['nid'];



$de=mysqli_query($con,"UPDATE leavedata SET Status='$st' where id=$id");

echo"<br>";

if($de)
{
  echo"
  <div class='alert alert-success'>
  <strong>Success!</strong> Leave Data Update.
</div>";
}
else
{
  echo"
  <div class='alert alert-danger'>
  <strong>Error!</strong>Ocuur.
</div>";
}

}


?>

        
    
    <br>
    <a href="LeaveDelete.php?i=<?php echo $col['id'];?>"><button type="button" class="btn btn-danger btn-lg btn-block responsive-width">
       REMOVE
    </button>

  

    <br>

   
  </a>
    </div>
</div>
</div>
</form>
</div>
</div>
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

