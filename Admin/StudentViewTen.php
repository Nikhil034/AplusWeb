<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<?php



$id=$_GET['i'];

$s=mysqli_query($con,"select * from studentendata where Rollno='$id'");
$col=mysqli_fetch_array($s);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Student View 10th Class</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>



    function myFunction(){
      var x=document.getElementById("myInput");
      if(x.type==="password"){
        x.type="text";
      }else{
        x.type="password";
      }
    }
// function myFunction() {
//   var x = document.getElementById("myInput");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// }



</script>
</head>
<body>

<div class="container">
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="tendata.php">10th Class</a></li>
    <li class="breadcrumb-item active" aria-current="page">View Student</li>
  </ol>
</nav>
  <div class="card" style="margin-top: 2px;">
    <div class="card header">
  <h2>Student 10th Data</h2>
  


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
        <td><input type="password" id="myInput" readonly="" style="border: none;"value="<?php echo $col[4];?>"><input type="checkbox" onclick="myFunction()"></td>
      </tr>  
       <tr>
        <th>STANDARD</th>
        <td><?php echo $col[6];?></td>
      </tr>  
       <tr>
        <th>SEX</th>
        <td><?php echo $col[7];?></td>
      </tr>  
       <tr>
        <th>PHONE</th>
        <td><?php echo $col[5];?></td>
      </tr>  
       <tr>
        <th>ADDRESS</th>
        <td><?php echo $col[8];?></td>
      </tr>  

        <tr>
        <th>STATUS</th>
        <td><?php echo $col[9];?></td>
      </tr>  
                

    </thead>
    <tbody>
    </tbody>
    

</table>

    <div class="container">
    <a href="updateten.php?i=<?php echo $col['Rollno'];?>"><button type="button" class="btn btn-info btn-lg btn-block responsive-width">
        UPDATE
    </button>

    <br>

    <a href="deleteten.php?i=<?php echo $col['Rollno'];?>"><button type="button" class="btn btn-danger btn-lg btn-block responsive-width">
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
