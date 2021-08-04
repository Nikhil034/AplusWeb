<?php

session_start();

if(isset($_SESSION['emg']))
{

   $Mail=$_SESSION['emg'];
  // echo $Mail;
?>
<?php include('connection.php');?>
<?php


$query=mysqli_query($con,"select * from studentninedata where Email='$Mail'");
$query2=mysqli_query($con,"select * from studentendata where Email='$Mail'");



?>

<style type="text/css">
	img.avatar 
	{
  width: 50%;
  border-radius: 350%;
  display: block;
  margin-left: auto;
  margin-right: auto;

}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student profile View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 

	<br><br>
 
<div class="container">

  <div class="card">
    <div class="card-body">
    	
    </div>
     <img src="ProfileStudent.jpg" alt="Avatar" class="avatar">

     
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Profile</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h5 class="modal-title">Student Profile</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <?php

        if($query)
        {
        while($row=mysqli_fetch_array($query))
        {
        ?> 	
        <div class="modal-body">

       
      
          <div class="d-flex p-3 bg-primary text-white">  
             RollNo:- <?php echo $row['RollNo'];?> 
           </div>
           <br>
            <div class="d-flex p-3 bg-primary text-white">  
             Name:- <?php echo $row['Name'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Email:- <?php echo $row['Email'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Password:- <?php echo $row['Password'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Standard:- <?php echo $row['Standard'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Phoneno:- <?php echo $row['Phone'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Address:- <?php echo $row['Address'];?> 
           </div>
         
         


        </div>
        <?php
          }
         } 
        ?>
        <?php
         if($query2)
        {

          while($row1=mysqli_fetch_array($query2))
          {

        ?>   
          <div class="modal-body">

       
      
          <div class="d-flex p-3 bg-primary text-white">  
             RollNo:- <?php echo $row1['Rollno'];?> 
           </div>
           <br>
            <div class="d-flex p-3 bg-primary text-white">  
             Name:- <?php echo $row1['Name'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Email:- <?php echo $row1['Email'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Password:- <?php echo $row1['Password'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Standard:- <?php echo $row1['Standard'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Phoneno:- <?php echo $row1['Phone'];?> 
           </div>
           <br>
           <div class="d-flex p-3 bg-primary text-white">  
             Address:- <?php echo $row1['Address'];?> 
           </div>
         
         


        </div>
        <?php
         }
         }
         ?> 
        <div class="modal-footer">
        
        </div>
      </div>
      
    </div>
  </div>
  


  </div>
</div>
​
</body>
</html>
​










<?php 
}

else
{
  echo "Plese Login Page";
?>



 <a href="StudentLoginHere.php" >Login First</a>
<?php
}
?> 
