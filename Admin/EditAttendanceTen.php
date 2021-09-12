  <?php include('connection.php');?>
  <?php
          if(isset($_POST['sbtn']))
          {
            $r=$_POST['rn'];
            $val=$_POST['sbt'];
            $dt=$_POST['dt'];

            if($val=="Present")
            {
              $up=mysqli_query($con,"update attendanceten set Value='Absent' where RollNo='$r' and Date='$dt'");
              header("location:TenAttendanceShow.php?Date=$dt");
             
            }
            else
            {
              $up=mysqli_query($con,"update attendanceten set Value='Present' where RollNo='$r' and Date='$dt'");
              header("location:TenAttendanceShow.php?Date=$dt");
               
            } 

            
          }
 ?>