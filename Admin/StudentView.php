<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<?php


$id=$_GET['i'];

$s=mysqli_query($con,"select * from studentninedata where RollNo='$id'");
$col=mysqli_fetch_array($s);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Student View 9th Class</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</head>
<body>

<div class="container">
  <div class="card" style="margin-top: 2px;">
    
    <div class="card header">
  <h2>Student 9th Data</h2>
  


  <div class="card-body" style="padding:0px;">  

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>RNo</th>
        <td><?php echo $col[1];?></td>
      </tr>  
         <tr>
        <th>NAME</th>
        <td><?php echo $col[2];?></td>
      </tr>  
       <tr>
        <th>EMIAL</th>
        <td><?php echo $col[3];?></td>
      </tr>  
       <tr>
        <th>PASSWORD</th>
        <td><input type="password" id="myInput" style="border-style: none;" value="<?php echo $col[4];?>">&nbsp&nbsp<input type="checkbox" onclick="myFunction()"></td>
      </tr>  
       <tr>
        <th>STANDARD</th>
        <td><?php echo $col[5];?></td>
      </tr>  
       <tr>
        <th>SEX</th>
        <td><?php echo $col[6];?></td>
      </tr>  
       <tr>
        <th>PHONE</th>
        <td><?php echo $col[7];?></td>
      </tr>  
       <tr>
        <th>ADDRESS</th>
        <td><?php echo $col[8];?></td>
      </tr>  

        <tr>
        <th>STATUS</th>
        <td><?php echo $col[10];?></td>
      </tr>  
                

    </thead>
    <tbody>
    </tbody>
    

</table>

    <div class="container">
    <a href="updatest.php?i=<?php echo $col['RollNo'];?>"><button type="button" class="btn btn-info btn-lg btn-block responsive-width">
        UPDATE
    </button>

    <br>

    <a href="delete.php?i=<?php echo $col['RollNo'];?>"><button type="button" class="btn btn-danger btn-lg btn-block responsive-width">
        DELETE
    </button>

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
