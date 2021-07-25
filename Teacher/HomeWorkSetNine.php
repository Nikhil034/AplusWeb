<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>


<?php include('connection.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>New HomeWork Set For Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 
  <form action="" method="post">
    <div class="form-group">

        

      <h2>Set HomeWork 9th class</h2>

   
      <label for="Subject">Subject</label>
      <input type="text" class="form-control"  placeholder="Enter Subject of HomeWork" name="sb" required="">

       <label for="Standard">Standard</label>
      <input type="number" class="form-control"  placeholder="Enter Standard of HomeWork" name="st" min="9" max="10" required="">

       <label for="Title">Title</label>
      <input type="text" class="form-control"  placeholder="Enter Title of HomeWork" name="tt" required="">


    <label for="HomeWork">HomeWork</label>
    <textarea class="form-control" id="" rows="3" name="hm" required=""></textarea>


      
      <label for="gdate">Give Date</label>
      <input type="date" class="form-control"  name="gd" required="">

      <label for="cdate">Complete Date</label>
      <input type="date" class="form-control" name="cd" required="">


      

   <br>


   &nbsp <input type="submit" class="btn btn-success" value="Done" name="dn">
   &nbsp
 

   <input type="submit" class="btn btn-warning" value="View Work" name="view" formaction="NineHomeWorkView.php">

  


 




  </form>
</div>

</body>
</html>



<?php

if (isset($_POST['dn']))
  {
    
    $sub=$_POST['sb'];
    $tit=$_POST['tt'];
    $home=$_POST['hm']; 
    $give=$_POST['gd'];
    $com=$_POST['cd'];
    $sd=$_POST['st'];


    

  

  $q=mysqli_query($con,"insert into sethomeworknine(Subject,Std,Work,Details,Gdate,Cdate)values('$sub','$sd','$tit','$home','$give','$com')");

  if($q)
  {
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> New HomeWork Is Set
  </div>";
  }
  else
  {
    echo "<div class='alert alert-danger'>
    <strong>Fail!</strong> Error Occur
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



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?> 

