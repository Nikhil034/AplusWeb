

<style type="text/css">
a
{
  text-decoration: none;

}
</style>

<?php

session_start();

if(isset($_SESSION['ema']))
{
 // echo $_SESSION['ema'];
?>

<?php include 'connection.php';?>



<?php
$q=mysqli_query($con,"select * from admindata");
$ad=mysqli_fetch_array($q)

?>




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
    <title>Admin Dashboard</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
         
           
          
        </div>


        <h4>Hello,  <?php echo $ad['Name'];?></h4>
      
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">

            
            
            <img src="assets/hello.svg" alt="" />
            <div class="main__greeting">
              <h1>
              </h1>

              
              
              <p>Welcome to your admin dashboard</p>
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
           

            <div class="charts__right" style="padding: 12px;">
              <div class="charts__right__title">
                <div>
                  <h1>Information Section</h1>
                  <p>Click to show Data</p>
                </div>
                
              </div>

              <div class="charts__right__cards">
                <a href="ninedata1.php"><div class="card1">
                  <h2>Student 9th</h2>
                </div>
              </a>

                <a href="tendata.php"><div class="card2">
                  <h2>Student 10th</h2>
                </div>
              </a>

                <a href="teacherdata.php"><div class="card3">
                  <h2>Teachers</h2>
                </div>
              </a>

                <a href="admindata.php"><div class="card4">
                  <h2>Admin</h2>

                
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

        <div id="MenuClick">

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>
          <h2>MAIN</h2>
          <div class="sidebar__link">
          <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
            <a href="TakeAttendance.php">Attendance Management</a>
          </div>
          <div class="sidebar__link">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <a href="MyClassActivity.php">Class Activity</a>
          </div>
          <div class="sidebar__link">
             <i class="fa fa-credit-card" aria-hidden="true"></i>
            <a href="feesmanage.php">Fees Management</a>
          </div>
          <div class="sidebar__link">
      
            <i class="fa fa-bullhorn" aria-hidden="true"></i>
            <a href="EventManage.php">Event Managment</a>
          </div>
          <div class="sidebar__link">
           <i class="fa fa-question-circle" aria-hidden="true"></i>
            <a href="InqueryofPeople.php">Any Inquery</a>
          </div>
          <div class="sidebar__link">
           <i class="fa fa-book" aria-hidden="true"></i>
            <a href="HomeworkManage.php">Homework Management</a>
          </div>
          <div class="sidebar__link">
          <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <a href="ExamResultManage.php">Exam & Result Management </a>
          </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="AdminLogout.php">Log out</a>
          </div>
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

  header("location:AdminLoginhere.php")
?>




<?php
}
?> 
