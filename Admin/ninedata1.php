<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<style type="text/css">
  h2
  {
    text-align: center;
    background-color: orange;
    text-overflow: auto;
  }
  p
  {

    text-align: center;
    font-size: 16px;
    text-overflow: auto;


  }
  table
  {
    margin-top: 50px;
  }
  
  .responsive-width {
    font-size: 3vw;
    
}
a
{
  text-decoration: none;

}


</style>

<?php



$s=mysqli_query($con,"select * from studentninedata");



?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


 <!--   <script>
$(document).ready(function()

{
  $("#search").on("keyup", function() 
  {
    var value = $(this).val().toLowerCase();
    $("#tb tr").filter(function() 
    {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 -->


</head>
<body>

<div class="container">
  <div class="card" style="margin-top: 2px;">
    <div class="card header">
      <form method="post">
  <h2 >Student 9th Data</h2>
  <br>
  <a href="insertst.php" class="btn btn-primary" style="float:right;"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="white" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>  </a>

&nbsp<a href="DeleteAllRecordNine.php" class="btn btn-danger" style="float:center;">

  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>

 </a>




  <a href="NineDataDownloadPdf.php" class="btn btn-info" style="float:left;">
    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="white" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
  <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
</svg>
 </a>

   &nbsp<input type="submit" name="sb" value="Move" class="btn btn-success" style="float:center;" >

   </form>

   <?php

   if(isset($_POST['sb']))
   {

   

    $transfer=mysqli_query($con,"insert into testingtb(Rollno,Name,Email,Password,Phoneno,Standard,Sex,Address)select RollNo,Name,Email,Password,Phone,Standard,Sex,Address from studentninedata");

    $up=mysqli_query($con,"UPDATE testingtb SET Standard = '10'");

    if($transfer)
{
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> Students 9 Transfer To 10  Succesfull
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


  


  <br><br>

  <div class="card-body" style="padding:0px;">  
 

    
    <br>

  <div class="table-responsive">  
  <form method="post">        
  <table class="table table-bordered" id="sdt">
    <thead>
      <tr class="">
        <th>RNo</th>
        <th>NAME</th>
        <th>VIEW</th>
        
      </tr>
    </thead>
    <tbody>

       <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>

    <tr>
   <td><?php echo $r['RollNo'];?></td> 
    <td><?php echo $r['Name'];?></td>  
      <td><a href="StudentView.php?i=<?php echo $r['RollNo'];?>" class="btn btn-primary">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
       <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
     <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
    </svg>

      </a></td>
    

    </tr>
    <?php
}
?>

  </a>
</td>
    </tbody>
  </table>

    

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#sdt').DataTable();
</script>


 

</form>


  </div>
</div>
</div>

  
    <br>

    <div class="container">
    <a href="index.php"><button type="button" class="btn btn-warning btn-lg btn-block responsive-width">
        BACK
    </button>
  </a>
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



