<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>

<?php include('connection.php');?>

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


$s=mysqli_query($con,"select * from studentendata where isDeleted=0");



?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <!--     <script>
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
</script> -->
</head>
<body>

<div class="container">
  <div class="card" style="margin-top: 2px;">
    <div class="card header">
  <h2>Student 10th Data</h2>
  <br>
  <a href="NewStudentAddTen.php" class="btn btn-primary" style="float:right;">
    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="white" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg> 
  </a>
  <br><br>

  <div class="card-body" style="padding:0px;">  

   

    <br>

  <div class="table-responsive" id="tb">  
  <form method="post">        
  <table class="table" id="sdt">
    <thead>
      <tr>
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
   <td><?php echo $r['Rollno'];?></td> 
    <td><?php echo $r['Name'];?></td>  
    <td><a href="ViewStudentTen.php?i=<?php echo $r['Rollno'];?>" class="btn btn-primary">
      
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>  

    </a></td>
    

    </tr>
    <?php
}
?>
</tbody>
</table>

  </a>
</td>


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



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?> 