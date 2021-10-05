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
  <title>Add New Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br>

<div class="container">
  <br>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="ninedata1.php">9th Class</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Student</li>
  </ol>
</nav>
 
  <form action="" method="post" autocomplete="off" onsubmit="return Validation()">
    <div class="form-group">


       <h2>For Fees Detail</h2>

      <label for="rollno">RollNo</label>
      <input type="number" class="form-control"  placeholder="Set RollNo" name="rn1" id="sroll" required="">
      <span id="sproll" class="text-danger"></span>
      <br>

    
  

      <label for="name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name " name="nm2" id="sname" required="">
      <span id="spnm" class="text-danger"></span>
      <br>

      <label for="">Paid</label>
      <input type="number" class="form-control"  placeholder="Enter paid Fess " name="pd" id="spd" required="">
      <span id="sppd" class="text-danger"></span>
      <br>

      <label for="">Remain</label>
      <input type="number" class="form-control"  placeholder="Enter Remain Fees " name="rm" id="srp" required="">
      <span id="spre" class="text-danger"></span>
      <br>

      <label for="">Total</label>
      <input type="number" class="form-control"  placeholder="Enter Total Fees To Paid" name="Top" id="stp" required="">
      <span id="sptd" class="text-danger"></span>
      <br>

      <br>  

    

 
        

      <h2>For Personal Data </h2>

      <label for="rollno">RollNo</label>
      <input type="number" class="form-control"  placeholder="Set RollNo" name="rn" id="sturn" required="">
      <span id="sprn" class="text-danger"></span><br>

      <label for="name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name " name="nm1" id="stunm" required="">
      <span id="spname" class="text-danger"></span><br>

      <label for="email">Email</label>
      <input type="email" class="form-control"  placeholder="Enter Email " name="em1" required=""><br>

      <label for="password">Password</label>
      <input type="password" class="form-control"  placeholder="Enter password " name="pw" id="stups" required="">
      <span id="sppw" class="text-danger"></span><br>

      <label for="Standard">Standard</label>
      <input type="number" class="form-control"  placeholder="Enter Standard" name="st" required=""><br>

      <label for="sex">Sex</label>
      <input type="text" class="form-control"  placeholder="Enter Sex" name="se" id="studgn" required="">
      <span id="spgn" class="text-danger"></span><br>

      <label for="phoneno">Phoneno</label>
      <input type="number" class="form-control"  placeholder="Enter Phone number" name="pn" id="stupn" required="">
      <span id="sppon" class="text-danger"></span>

      <label for="address">Address</label>
    <textarea class="form-control" id="" rows="3" name="ad" required=""></textarea>


      <label for="phoneno">Status</label>
      <input type="number" class="form-control" placeholder="Set Student Status" name="sta" min="0" max="1" id="stust" required="">
      <span id="pstatus" class="text-danger"></span>



   <br>

   <input type="submit" class="btn btn-success" value="Done" name="dn">
  <a href="ninedata1.php" class="btn btn-warning ">Back</a>
    




  </form>
</div>

</body>
<script>
  function Validation() {

    var s_id=document.getElementById('sroll').value;
    if(s_id==0 || s_id<0)
    {
       document.getElementById('sproll').innerHTML="*Invalid Rollno";
       return false; 
    }
    var s_name=document.getElementById('sname').value;
    if(!isNaN(s_name))
    {
      document.getElementById('spnm').innerHTML="*Invalid Format";
      return false;
    }
    var s_paid=document.getElementById('spd').value;
    if(s_paid==0 || s_paid<0)
    {
      document.getElementById('sppd').innerHTML="*Invalid Fees Detail";
      return false;
    }
    var s_remain=document.getElementById('srp').value;
    if(s_remain==0 || s_remain<0)
    {
      document.getElementById('spre').innerHTML="*Invalid Fees Detail";
      return false;

    }
    var s_total=document.getElementById('stp').value;
    if(s_total==0 || s_total<0)
    {
      document.getElementById('sptd').innerHTML="*Invalid Fees Detail";
      return false;
    }
    var st_roll=document.getElementById('sturn').value;
    if(st_roll==0 || st_roll<0)
    { 
        document.getElementById('sprn').innerHTML="*Invalid Rollno of Field";
        return false;
    }
    var st_nm=document.getElementById('stunm').value;
    if(!isNaN(st_nm))
    {
        document.getElementById('spname').innerHTML="*Invalid Format of Field";
        return false;
    }
    var st_pw=document.getElementById('stups').value;
    if(st_pw==0 || st_pw.length<=4)
    {
      document.getElementById('sppw').innerHTML="*Password is too short of Field";
      return false;
    }
    var st_gd=document.getElementById('studgn').value;
    if(!isNaN(st_gd))
    {
      document.getElementById('spgn').innerHTML="*Invalid Format of Field";
      return false;
    }
    var st_pn=document.getElementById('stupn').value;
    if(st_pn.length>10)
    {
      document.getElementById('sppon').innerHTML='*Require 10 Digit';
      return false;
    }
    var st_status=document.getElementById('stust').value;
    if(st_status<=0 || st_status>1)
   {
      document.getElementById('pstatus').innerHTML="*Invalid Status";
   }   




    
  }
</script>
</html>





<?php



if (isset($_POST['dn']))
  {
    
  $rn=$_POST['rn'];
 
  $nm=$_POST['nm1'];
  
  $em=$_POST['em1'];
  $ps=$_POST['pw'];
  $std=$_POST['st'];
  $se=$_POST['se'];
  $pn=$_POST['pn'];
  $ad=$_POST['ad'];
  $sta=$_POST['sta'];


  $rn=$_POST['rn1'];
  $name=$_POST['nm2'];
  $paid=$_POST['pd'];
  $rem=$_POST['rm'];
  $tot=$_POST['Top'];

  



  $q=mysqli_query($con,"insert into studentninedata (Rollno,Name,Email,Password,Standard,Sex,Phone,Address,Status)values('$rn','$nm','$em','$ps','$std','$se','$pn','$ad','$sta')");

  $q=mysqli_query($con,"insert into feesactivity(Rollno,Name,Paid,Remain,Total)values('$rn','$name','$paid','$rem','$tot')");

  if($q)
  {
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> New Student Add Succesfull
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
