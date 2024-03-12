<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<?php 

        
        include("../config.php");
        if(empty($_SESSION)){
          header("location:login.php");
        } 
        $rollno=$_SESSION['rollno'];


         $sql = "SELECT * FROM signin WHERE rollno='$rollno'";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
             $name = $row["name"];
             $email = $row["email"];
             $phone = $row["phone"];
             $image = $row["image"];
          }
        }

?>
<section>

 <h1 class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </h1>
    <div class="left" id="lef_nav">
     
      <div class="logo">
        <img src="../Assets/docs.png" alt="">
      </div>

      <div class="navigates">
        <a href="#">Dashboard</a>
        <a href="events.php">Events</a>        
        <a href="#">Academics</a>
        <a href="#">Study Materials</a>
        <a href="#">Profile</a>
        <a href="grievance.php">Grievance</a>
      
      </div>

      <div class="footer">
        <div class="logout">
          <a href="stu_logout.php">Logout</a>
        </div>
         
        <div class="slcs">
          <img src="../Assets/logo_slcs.jpg" alt="">
        </div>
      </div>    
    </div>
    <!-- ===============Center Side Segement===================== -->
    <div class="center">
      <!-- struct for heading and time -->
      <div class="cen-nav">
        <h1>Student dashboard</h1>
        <div class="date">
          <div class="display-time"></div>
        </div>
      </div>

      <!-- card/profile basic details -->
      <div class="card">

        <div class="top">
          <div class="sc1"></div>
          <div class="sc2"></div>
        </div>

        <div class="edit">
          <a href="edit.html">Edit Profile</a>
        </div>

        <div class="profile-pic">
          <?php 
          echo '<img src=" '.$image.' "alt="Cover" class="profile_pic">';
         ?>
        </div>

        <div class="bottom">
          <div class="name">
            <?php echo "<h1>$name</h1>";?>
            <?php echo "<p>$rollno</p>"; ?>
            <p>Student</p>
          </div>

          <div class="email">
            <p>Email</p>
            <?php echo "<h5>$email</h5>"; ?>
          </div>

          <div class="phone">
            <p>Phone</p>
            <?php echo "<h5>$phone</h5>"; ?>
          </div>

        </div>
      </div>

      <!-- staff and students -->
      <div class="people">
        <a href="" class="student" href>
            Students
        </a>
        <a href="https://slcs.edu.in/" target="blank" class="slcs">
             SLCS
        </a>
        <a href="#" class="staff">
             Teachers
        </a>
      </div>

    

    </div>
    <!-- ============Right side segement ============================================= -->
  <div class="right">
     <div class="wrapper">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded"><</span>
          <span id="next" class="material-symbols-rounded">></span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
     </div>
    <div class="container">
             <!-- Quote to be Displayed Here -->
            <h1>
            <span class="quote" id="quote"></span>
            </h1>
            <!-- Author to be Displayed Here -->
            <p class="author" id="author"></p>

            <hr/>
            <div class="buttons">
                <button class="next" onclick="getNewQuote()">Next quote</button>
            </div>
        </div>
    </div>
  </div>

</section>

</body>

<script src="../Admin/time.js"></script>
<script src="cal.js"></script>
<script src="qoutes.js"></script>
<script src="script.js"></script>


</html>