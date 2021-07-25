
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Fees Detail </h2>
  <form action="" method="post">
    <div class="form-group">

        <label for="email">NO:</label>
      <input type="number" class="form-control"  placeholder="Update No" name="no">

      <label for="email">Subject</label>
      <input type="text" class="form-control"  placeholder="Update Subject" name="sb">
    </div>
    <div class="form-group">
      <label for="pwd">Pay</label>
      <input type="text" class="form-control"  placeholder="Update pay" name="pay">

         <br>
         <input type="submit" class="btn btn-info" value="Update" name="fup" formaction="feesmanage.php">
         <input type="submit" class="btn btn-warning" value="Back" formaction="feesmanage.php"  >
    </div>
  </form>
</div>
</body>
</html>


<?php



if(isset($_POST['fup']))
{

$con=mysqli_connect("localhost","root"," ","studentdb"); //connection done

  //now pass variable into other variable

  
  
  $rn=$_POST['no'];
  $sb=$_POST['sb'];
  $p=$_POST['pay'];


  //pass query of insert data in database

  mysqli_query($con,"update feestb set Subject='$sb',Pay='$p' where No='$rn'");
}

  ?>