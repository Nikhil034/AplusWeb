<?php
session_start();
if(empty($_SESSION["eml"]) || empty($_SESSION["pass"]))
{ 
  header("location:");
}
?>

<?php include('connection.php');?>

<?php

$em = $_SESSION['eml'];
$id=$_GET['i'];
$q=mysqli_query($con,"select User_id from teacherdata where Email='$em'");
$c=mysqli_fetch_array($q)
//$s=mysqli_query($con,"select * from teacherdata where User_id='$id' and Email='$em'");
// $q=mysqli_query($con,"select * from teacherdata where User_id='$id'");
//$col=mysqli_fetch_array($s);
//$col=mysqli_fetch_array($q);

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
    function myFunction()
    {
      var x=document.getElementById("myInput");
      if(x.type=="password"){
        x.type='text';
      }else{
        x.type='password';
      }
    }
  </script>
</head>
<body>

<?php
if($id==$c[0])
{
  $s=mysqli_query($con,"select * from teacherdata where User_id='$id' and Email='$em'");
  $col=mysqli_fetch_array($s)
?>
<div class="container">
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
        <td><input type="PASSWORD" id="myInput" style="border: none;" readonly="" value="<?php echo $col[3];?>">
           <input type="checkbox" onclick="myFunction()">
        </td>
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
    <a href="UpdateTeacherData.php?i=<?php echo $col['User_id'];?>"><button type="button" class="btn btn-info btn-lg btn-block responsive-width">
        UPDATE
    </button>

<!--     <br>

    <a href="deleteteacher.php?i=<?php echo $col['User_id'];?>"><button type="button" class="btn btn-danger btn-lg btn-block responsive-width">
        DELETE
    </button>

  </a> -->
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<?php
}
else
{
  $q=mysqli_query($con,"select * from teacherdata where User_id='$id'");
  $col=mysqli_fetch_array($q);
?>
<div class="container">
  <div class="card" style="margin-top: 2px;">
    <div class="card header">
  <h2>Teacher Data</h2>
  


  <div class="card-body" style="padding:0px;">  

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-hover">
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
      <!--  <tr>
        <th>PASSWORD</th>
        <td><?php echo $col[3];?></td>
      </tr> -->  
       <tr>
        <th>AGE</th>
        <td><?php echo $col[4];?></td>
      </tr>   
       <tr>
        <th>SUBJECT</th>
        <td><?php echo $col[5];?></td>
      </tr>  
<!--        <tr>
        <th>SALARY</th>
        <td><?php echo $col[6];?></td>
      </tr>  
 -->
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

<!--     <div class="container">
    <a href="updateteacher.php?i=<?php echo $col['User_id'];?>"><button type="button" class="btn btn-info btn-lg btn-block responsive-width">
        UPDATE
    </button>

    <br>

    <a href="deleteteacher.php?i=<?php echo $col['User_id'];?>"><button type="button" class="btn btn-danger btn-lg btn-block responsive-width">
        DELETE
    </button>

  </a> -->
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<?php
}?>
</body>

</html>
