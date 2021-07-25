<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Event Create For Student</title>
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
    <div class="card-header">New Event Create</div>
    <div class="card-body">
      <form method="post">
        <div class="card-header">Select Class:-

    <select class="form-select" aria-label="Default select example" name="selectclass">
  <option selected disabled="true">Choose Here</option>
  <option value="All">All</option>
  <option value="9">9</option>
  <option value="10">10</option>





</select>

 &nbsp &nbsp&nbsp &nbsp&nbsp  <input  type="submit" class="btn btn-info" value="Submit" name="sb1">
    </div> 
  </form>
    <div class="card-footer">
      
    </div>
  </div>
</div>

</body>
</html>

 <?php

  if(isset($_POST['sb1']))
  {
    
     $con=mysqli_connect("localhost","root"," ","studentdb");

     $sb=$_POST['selectclass'];

     if(!$con)
     {
       echo"error";
     }
     else
     {

      if($sb==All)
      {

       header("location:EventForAll.php");
     }

     else if($sb==9)
     {
      header("location:SetEventNine.php");
     }
     else
     {
      header("location:SetEventTen.php");
     }
     
   }

  }
  ?>
