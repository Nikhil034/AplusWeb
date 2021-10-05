
 <?php include('connection.php');?>
 <?php
          if(isset($_POST['mybtn']))
          {
            $r=$_POST['rn'];
            $val=$_POST['sbt'];
            $dt=$_POST['dt'];
            // echo"<pre>";
            // print_r($_POST);
            // die();
            if($val=='Present')
            {
              $up=mysqli_query($con,"update attendancenine set Value='Absent' where RollNo='$r' and Date='$dt'");
              header("location:NineAttendanceShow.php?Date=$dt");
             
           
            }
            else
            {
              $up=mysqli_query($con,"update attendancenine set Value='Present' where RollNo='$r' and Date='$dt'");
              header("location:NineAttendanceShow.php?Date=$dt");
              
              
            }

          }
          ?>