<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
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
  <br>

<div class="container">
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="homeworkManage.php">HomeWork</a></li>
    <li class="breadcrumb-item active" aria-current="page">9th Howework</li>
  </ol>
</nav>
 
  <form action="" method="post">
    <div class="form-group">

        

      <h2>Set HomeWork 9th class</h2>

   
      <label for="Subject">Subject</label>
      <input type="text" class="form-control"  placeholder="Enter Subject of HomeWork" name="sb">

       <label for="Standard">Standard</label>
      <input type="number" class="form-control"  placeholder="Enter Standard of HomeWork" name="st" min="9" max="10">


      <label for="Title">Title</label>
      <input type="text" class="form-control"  placeholder="Enter Title of HomeWork" name="tt">




    <label for="HomeWork">HomeWork</label>
    <textarea class="form-control" id="" rows="3" name="hm"></textarea>


      
      <label for="gdate">Give Date</label>
      <input type="date" class="form-control"  name="gd">

      <label for="cdate">Complete Date</label>
      <input type="date" class="form-control" name="cd">


      

   <br>


   &nbsp <input type="submit" class="btn btn-success" value="Done" name="dn">
   &nbsp
 

   <input type="submit" class="btn btn-warning" value="View Work" name="view" formaction="HomeWorkViewNine.php">

  


 




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



 <a href="AdminLoginhere.php" >Login First</a>
<?php
}
?> 




