<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<?php 

 require("fpdf183/fpdf.php");


 $res=mysqli_query($con,"select distinct RollNo,Name,Sex,Phone from studentninedata where isDeleted=0");


 $pdf=new FPDF();
 $pdf->AddPage();
 $pdf->SetFont("Arial","B",17);
 $pdf->Cell(0,15,"Student 9th Details (A+ Class)",1,1,'C'); //width height title border new_line center

 $pdf->Cell(20,10,"RNO",1,0,'C');
  $pdf->Cell(50,10,"NAME",1,0,'C');
   $pdf->Cell(50,10,"SEX",1,0,'C');
    $pdf->Cell(70,10,"PNO",1,1,'C');

  
    while($row=mysqli_fetch_array($res))
    {

    $pdf->Cell(20,10,$row['RollNo'],1,0,'C');
    $pdf->Cell(50,10,$row['Name'],1,0,'C');
    $pdf->Cell(50,10,$row['Sex'],1,0,'C');
     $pdf->Cell(70,10,$row['Phone'],1,1,'C');

    

   }

   $pdf->Cell(0,15,"Manage & Organize By:- Tarak Gajera",1,1,'C');

    $pdf->Cell(0,15,"Address:-Near Hanuman Temple,Keshod",1,1,'C');





 $pdf->output();
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
