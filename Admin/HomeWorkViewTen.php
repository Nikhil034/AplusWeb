<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<style type="text/css">
  h3
  {
    background-color: yellow;
    font-size: 20px;
    margin-top: 20px;
  }
 
   .search
{
  border: 2px solid orange;
  overflow: auto;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  margin-left: -15px;
}

.search input[type="text"]
{
  border: 0px;
  width: 50%;

  padding: 10px 15px;
}

.search input[type="text"]:focus
{
  outline: 0;
  font-size: 15px;

}

.search input[type="submit"]
{
  border: 0px;
  background: none;
  background-color: orange;
  color: #fff;
  float: right;
  padding: 20px;
  border-radius-top-right: 5px;
  -moz-border-radius-top-right: 5px;
  -webkit-border-radius-top-right: 5px;
  border-radius-bottom-right: 5px;
  -moz-border-radius-bottom-right: 5px;
  -webkit-border-radius-bottom-right: 5px;
        cursor:pointer;
}



/* ===========================
   ====== Medua Query for Search Box ====== 
   =========================== */

@media only screen and (min-width : 150px) and (max-width : 780px)
{
  {}
  .search
  {
    width: 102%;
    margin: 10 auto;

  }
}
 
</style>
<?php



$s=mysqli_query($con,"select * from sethomeworkten");



?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</head>
<body>

  
  <br>





  <br>




  <div class="card">
  <h3 class="card-header">Enter Subject To Show HomeWork
  </h3>
  

  <div class="card-body">
    <div class="search">
        <form class="search-form" method="post">
           <input type="text"  name="sub" placeholder="Enter Subject Name">
          <input type="submit" value="Show" name="search">
        
        </form>

    </div>

    <?php

    if (isset($_POST['search']))
 {

   
   $sb=$_POST['sub'];
   $qu="SELECT * FROM sethomeworkten WHERE Subject='$sb' ";
   $qu_run=mysqli_query($con,$qu);

?> 
<br>

<?php

          if(mysqli_num_rows($qu_run)>0)
        {

      while($row=mysqli_fetch_array($qu_run))
      {

      ?>   
      
      <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr class="table table-primary">
        
        <th>SNO</th>
        <td><?php echo $row['id'];?></td>
      </tr>
      <tr>  
        <th>SUBJECT</th>
        <td><?php echo $row['Subject'];?></td>
      </tr>
      <tr>  
        <th>WORK</th>
        <td><?php echo $row['Work'];?></td>
      </tr>
      <tr>  
        <th>DETAILS</th>

         <td><?php echo $row['Details'];?></td>
      </tr>
      <tr>  
        <th>GDATE</th>
          <td><?php echo $row['Gdate'];?></td>
      </tr>
      <tr>  
        <th>CDATE</th>
          <td><?php echo $row['Cdate'];?></td>
      </tr>  
       
      </tr>
    </thead>
    <tbody>
       

      <tr>
   

   
  
  
    

      
     
     

    </tr> 

    <?php
     }

    }
    else
    {
      ?>
      <tr>
        <td>No HomeWork Found of <?php echo $sb;?></td>
      </tr>
      <?php

    }
   ?>
    
     
</a>
</td>
</tr>
</tbody>



  </table>

  </div>



  </tr>
</table>
</div>
</div>

<?php

 }
 ?>





 <br><br>

</body>
  
</form>
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
