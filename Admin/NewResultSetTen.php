<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>

<?php include 'connection.php';?>

<?php


$id=$_GET['i'];

$s=mysqli_query($con,"select distinct RollNo,Name from studentendata");
$q=mysqli_query($con,"select Subject,Marks,Date from timetableten where Sno=$id");


$col=mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Result Set For 10th Class</title>
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
    <div class="card-header">Set New Result</div>
    <div class="card-body">
       <div class="table-responsive">          
          <table class="table">

            <form method="POST">


    
             
               <tr>
                  <td>
                    <p>Subject:
                      <input type="text" name="sub"  value="<?php echo $col['Subject']; ?>">
                    </p>
                  </td>
                  <td>
                    <p>Total Mark:
                      <input type="text" name="tot"  value="<?php echo $col['Marks']; ?>">
                    </p>
                  </td>
                  <td>
                    <P>Date:
                      <input type="text" name="dat"  value="<?php echo $col['Date']; ?>">
                    </P>
                  </td>
                </tr>
             
              <tbody>
                <tr class=" ">
                  <th>RNo</th>
                  <th>NAME</th>
                  <th>MARK</th>
                </tr>
              </tbody>
              <?php

                while($r=mysqli_fetch_array($s))
                {
              ?>
              <tr>
                <td>
                  <!-- <input type="text" name="no[]" value="<?php //echo $r['RollNo']?>" readonly> -->
                   <input class="form-control form-control-sm" type="text" name="no[]" value="<?php echo $r['RollNo']?>">
                </td>
                <td>
                 <!--  <input type="text" name="nm[]" value="<?php //echo $r['Name']?>" readonly> -->
                    <input class="form-control form-control-sm" type="text" name="nm[]" value="<?php echo $r['Name']?>">

                </td>
                <td>
                  <!-- <input required type="number" name="markget[]" placeholder="Enter Mark"> -->
                  <input required class="form-control form-control-sm" type="number" name="markget[]" placeholder="Enter Marks">
                </td>
              </tr>
              <?php
                }
              ?>
          </table>
        </div>
    </div> 
    <div class="card-footer">
      
       <input type="submit" class="btn btn-primary" value="Submit" name="done">
    </div>
  </form>
  </div>
</div>

</body>
</html>

<?php
if (isset($_POST['done']))



{



   $no=$_POST['no'];
  $nm=$_POST['nm'];
  $sb=$_POST['sub'];
  $mar=$_POST['markget'];
  $tot=$_POST['tot'];
  $dt=$_POST['dat'];


foreach ($mar as $key=> $value) 
{


  
  $q = mysqli_query($con,"insert into resultten(Rollno,Name,Subject,Mark,Total,Date_Ex) values ('{$_POST['no'][$key]}','{$_POST['nm'][$key]}','$sb','$value','$tot','$dt')");














}

if($q)
{
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> New Result Add Succesfull
  </div>";
}
else
{
   echo" <div class='alert alert-danger'>
    <strong>Error!</strong> Occur
  </div>";
}


















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
