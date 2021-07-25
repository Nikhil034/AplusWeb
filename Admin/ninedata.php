<style type="text/css">
  h2
  {
    text-align: center;
    background-color: yellow;
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
  .update
  {
    background-color: green;
    border-radius: 5px;
  }
  .delete
  {
    background-color: red;
    border-radius: 5px;
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

$con=mysqli_connect("localhost","root"," ","studentdb");

$s=mysqli_query($con,"select * from ninedata");



?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student 9th Data</h2>
  <p>You can Easy way insert,update and show Data</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>RNo</th>
        <th>NAME</th>
        <th>STANDARD</th>
        <th>SEX</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>STATUS</th>
        <th>OPERATION</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
     <?php

    while($r=mysqli_fetch_array($s))
  {

   ?>

    <tr>
   <td><?php echo $r['Rollno'];?></td> 
    <td><?php echo $r['Name'];?></td>  
    <td><?php echo $r['Standard'];?></td>
    <td><?php echo $r['Sex'];?></td>
    <td><?php echo $r['Email'];?></td>
    <td><?php echo $r['Phone'];?></td>
     <td><?php echo $r['Status'];?></td>
     <td><input type="submit" name="up"  value="E" class="update">
      <input type="submit" name="dl" value="D" class="delete"></td>

    </tr>


<?php
}
?>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#sdt').DataTable();
</script>

  </table>

  </div>
</div>

  <div class="container">
    <form method="post" action="">
    <input type="submit" name="in" value="INSERT" class="btn btn-info btn-lg btn-block responsive-width">
        
    </button>
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
</form>
</html>


