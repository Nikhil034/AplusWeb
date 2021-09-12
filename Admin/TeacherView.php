<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>

<?php

$con=mysqli_connect("localhost","root"," ","aplusweb");

$id=$_GET['i'];

$s=mysqli_query($con,"select * from teacherdata where User_id='$id'");
$col=mysqli_fetch_array($s);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Teacher Data View</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    function myFunction(){
      var x =document.getElementById("myInput");
        if(x.type==="password"){
          x.type="text";
        }else{
          x.type="password";
        }
      }
    


   
</script>
  </script>
</head>
<body>

<div class="container">
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="teacherdata.php">Teacher</a></li>
    <li class="breadcrumb-item active" aria-current="page">View</li>
  </ol>
</nav>
  <div class="card" style="margin-top: 2px;">
    <div class="card header">
  <h2>Teacher Data</h2>
  


  <div class="card-body" style="padding:0px;">  

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <td><?php echo $col[0];?></td>
      </tr>  
         <tr>
        <th>NAME</th>
        <td><?php echo $col[1];?></td>
      </tr>  
       <tr>
        <th>EMIAL</th>
        <td><?php echo $col[2];?></td>
      </tr>  
       <tr>
        <th>PASSWORD</th>
        <td><input type="password" id="myInput" style="border:none;" readonly="" value="<?php echo $col[3];?>">&nbsp &nbsp<input type="checkbox" onclick="myFunction()"></td>
      </tr>  
       <tr>
        <th>AGE</th>
        <td><?php echo $col[4];?></td>
      </tr>   
       <tr>
        <th>SUBJECT</th>
        <td><?php echo $col[5];?></td>
      </tr>  
       <tr>
        <th>SALARY</th>
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
                

    </thead>
    <tbody>
    </tbody>
    

</table>

    <div class="container">
    <a href="updateteacher.php?i=<?php echo $col['User_id'];?>"><button type="button" class="btn btn-info btn-lg btn-block responsive-width">
        UPDATE
    </button>

    <br>

    <a href="deleteteacher.php?i=<?php echo $col['User_id'];?>"><button type="button" class="btn btn-danger btn-lg btn-block responsive-width">
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

