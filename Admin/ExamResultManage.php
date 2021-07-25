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
  <title>Exam & Result Managment</title>
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
    <form method="post">
    <div class="card-header">Show Result Of Student

    </div>
    <div class="card-body">
      
     <select class="form-select" aria-label="Default select example" name="selectclassrs">
  <option selected disabled="true">Choose Class</option>
  <option value="9">9</option>
  <option value="10">10</option>




</select>

 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<input  type="submit" class="btn btn-success" value="Show Result" name="rs">


    </div> 
  </form>
   
  </div>
</div>

<?php

  if(isset($_POST['rs']))
  {
    
    
     $sb=$_POST['selectclassrs'];

     if(!$con)
     {
       echo"error";
     }
     else
     {

      if($sb==9)
      {

       header("location:ResultNine.php");
     }
     else
     {
      header("location:ResultTen.php");
     }
     
   }

  }
  ?>

  <br>

  <div class="container">

  <div class="card">
    <form method="post">
    <div class="card-header">Show Time Table & Set Result</div>
    <div class="card-body">

        <select class="form-select" aria-label="Default select example" name="selectclasstm">
  <option selected disabled="true">Choose Class</option>
  <option value="9">9</option>
  <option value="10">10</option>




</select>


 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<input  type="submit" class="btn btn-success" value="Show Table" name="tm">
      

    </div> 
    
  </div>
  <div class="card-footer ">
     

         <input type="submit" class="btn btn-warning" value="Back Home" formaction="index.php"  >
    </div>

    
</div>


</form>

<?php

  if(isset($_POST['tm']))
  {
    
     
     $sb=$_POST['selectclasstm'];

     if(!$con)
     {
       echo"error";
     }
     else
     {

      if($sb==9)
      {

       header("location:SetTimeTableNine.php");
     }
     else
     {
      header("location:SetTimeTableTen.php");
     }
     
   }

  }
  ?>


​
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

​
