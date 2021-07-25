<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<?php

$s=mysqli_query($con,"select * from studentninedata");

?>





<doctype html>
<html lang="en">
<head>



   <title>Parent Data of 9th Class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  






  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion2" ).accordion(
      {
        collapsible: true
      });

  } );


  </script>
</head>
<body>
 


<br>

<div id="accordion2">

  <h4>Student 9th Parent Data</h4>
  <div style="background-color: ;">


    
  
  <div class="card">
  
    
      <table class="table table-hover">
    <thead>
      
      <tr class="bg-primary text-white">
        <th>Name</th>
        <th>SEND</th>
        <th>EDIT</th>
        
     
    </tr>
    </thead>
    <tbody>
      
    </tbody>
    <?php
    
     while($row=mysqli_fetch_array($s))
     {


    ?>
    <tr>
      <td><?php echo $row['Name'];?></td>
      <td>
        <!-- <a href="parentcontactupdateNine.php?i=<?php //echo $row['id'];?>" class="btn btn-info">U</a> -->
        <!-- <span onclick='whatsappme("https://wa.me/+91<?php //echo $row['Parent_No'];?>?text=Hello")'><i class="fa fa-whatsapp text-success fa-3x" aria-hidden="true"></i></span> -->

        <a target="_blank" href="https://wa.me/+91<?php echo $row['Phone'];?>?text=Hello <?php echo $row['Name'];?>"><i class="fa fa-whatsapp text-success fa-3x" aria-hidden="true"></i></span>
        <!-- <a class="dyntrig" target="_blank"></a> -->
      </td>
      <td>
        <a href="parentcontactupdateNine.php?i=<?php echo $row['User_id'];?>" class="btn btn-success text-white">
          
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>

        </a>
      </td>
    </tr>
    <?php
  }
  ?>
  </table>
    </div> 
    <div class="card-footer">
      <a href="MyClassActivity.php" class="btn btn-warning">Back</a>
    </div>
  </div>
</div>

</body>
</html>

    
  </div>
  
</div>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script type="text/javascript">
   async function whatsappme(link){
      const { value: text } = await Swal.fire({
      input: 'textarea',
      inputLabel: 'Message',
      inputPlaceholder: 'Type your message here...',
      inputAttributes: {
        'aria-label': 'Type your message here'
      },
      showCancelButton: true
    })

    if (text) {
      myOtherUrl = link+"?text="+encodeURI(text);
      
      // var str = text;
      // var res = str.replace(" ", "+");
      // var myOtherUrl = link+"="+ res;
       
      newTab(myOtherUrl);
    }
   }
   function newTab(link) {

    console.log(link);
     var form = document.createElement("form");
     form.method = "GET";
     form.action = link;
     form.target = "_blank";
     document.body.appendChild(form);
     form.submit();
     // $(".dyntrig").attr("href",link);
     // $(".dyntrig").click();
     // console.log(link);
}
// $(".dyntrig").click(function(){
//   console.log("fire");
 
// });
 </script>
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
