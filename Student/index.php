<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{

  
   $Mail=$_SESSION['emg'];
   $id=mysqli_query($con,"select RollNo from studentninedata where Email='$Mail'");
   $ok=mysqli_query($con,"select Rollno from studentendata where Email='$Mail'");
   while ($row2 = $id->fetch_assoc())
    {
    //echo $row2['RollNo']."<br>";
   }
  
    while ($row3 = $ok->fetch_assoc())
    {
    echo $row3['Rollno']."<br>";
   }


   
?>

<?php


$ad=mysqli_query($con,"select * from admindata");
$qu=mysqli_query($con,"select * from studentninedata where Email='$Mail'");
$qu2=mysqli_query($con,"select * from studentendata where Email='$Mail'");

?>
<style type="text/css">
  a
  {
    text-decoration: none;
  }
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Student Dashboard</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
      
        <div class="navbar__right">
          <!-- <a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
             <i class="fa fa-power-off"></i>
          </a> -->
          <a href="#">
          <!--   <img width="30" src="assets/avatar.svg" alt="" /> -->
            <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
          </a>
        </div>
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="assets/reading.svg" alt="" />
            <div class="main__greeting">
              <?php
              if($qu)
              {
              while($row=mysqli_fetch_array($qu))
              {
              ?>  
              <h1>Hello,<?php echo $row['Name'];?></h1>
              <?php 
               }
             }

               ?>
                <?php
              if($qu2)
              {
              while($row1=mysqli_fetch_array($qu2))
              {
              ?>  
              <h1>Hello,<?php echo $row1['Name'];?></h1>
              <?php 
               }
             }
            
               ?>
              <p>Welcome to your student dashboard</p>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards">
            <div class="card">
              <i
                class="fa fa-user-o fa-2x text-lightblue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Student</p>

                  <?php

 
                  
                      if(!$con)
                   {
                     echo"connection fail";
                   }

                   $sql="SELECT count(Rollno) As total FROM studentninedata";
                   $Result=mysqli_query($con,$sql);
                   $value=mysqli_fetch_assoc($Result);
                   $num_nine=$value['total'];

                    $sql="SELECT count(Rollno) As total FROM studentendata";
                   $Result=mysqli_query($con,$sql);
                   $value=mysqli_fetch_assoc($Result);
                   $num_rows_both=$value['total']+$num_nine;


                   echo "<span class='font-bold text-title'>$num_rows_both</span>";

                ?>  
               
              </div>
            </div>

           

          

            <div class="card">
               <i
                class="fa fa-user-o fa-2x text-lightblue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Teacher</p>
                

               
              <?php

 
             
       
                if(!$con)
               {
               echo"connection fail";
               }

               $sql="SELECT count(User_id) As total FROM teacherdata";
               $Result=mysqli_query($con,$sql);
               $value=mysqli_fetch_assoc($Result);
               $num_rows=$value['total'];
               echo "<span class='font-bold text-title'>$num_rows</span>";

            ?>  
            


              </div>
            </div>
          </div>
          <!-- MAIN CARDS ENDS HERE -->

          <!-- CHARTS STARTS HERE -->
          <div class="charts">
           

            <div class="charts__right">
              <div class="charts__right__title">
                <div>
                  <h1>information Section</h1>
                  <p>Click to Show Data</p>
                </div>
                
              </div>

              <div class="charts__right__cards">
                 <a href="TeacherData.php">
                  <div class="card1">
                  <h3>Teachers</h3>                
                </div>
              </a>


                <a href="StudentProfile.php">
                <div class="card2">
                  <h3>Your Profile</h3>
                  
                </div>
              </a>


                <a href="StudentNotification.php">
                <div class="card2">
                  <h3>Event</h3>
               
                </div>
              </a>

              <?php
              while($row=mysqli_fetch_array($ad))
              {
              ?>  

              <a href="AdminData.php?i=<?php echo $row['User_id'];?>">
                <div class="card4">
                  <h3>Admin</h3>
               <?php
                }
                ?>   
                  
                </div>
              </a>
              </div>
            </div>
          </div>
          <!-- CHARTS ENDS HERE -->
        </div>
      </main>

      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
          
            <h1>A+ Class</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>
          <h2>MAIN</h2>
          <div class="sidebar__link">
          <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
            <a href="StudentAttendanceView.php">Student Attendance </a>
          </div>
          <div class="sidebar__link">
             <i class="fa fa-credit-card" aria-hidden="true"></i>
            <a href="StudentFeesView.php">Student Fees </a>
          </div>
          <div class="sidebar__link">
      
            <i class="fa fa-bullhorn" aria-hidden="true"></i>
            <a href="StudentNotification.php">Student Event</a>
          </div>
          <div class="sidebar__link">
          <i class="fa fa-clock-o" aria-hidden="true"></i>
            <a href="StudentLecture.php">Student Lecture </a>
          </div>
          <div class="sidebar__link">
           <i class="fa fa-book" aria-hidden="true"></i>
            <a href="StudentHomework.php">Student Homework</a>
          </div>
          <div class="sidebar__link">
          <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <a href="StudentExamAndResult.php">Student Exam & Result</a>
          </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="StudentLogout.php">Log out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
  </body>
</html>
<?php 
}



else
{
 
  header("location:http://localhost/AplusWeb/Student/StudentLoginHere.php");
?>




<?php
}
?> 
