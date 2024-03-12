<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance Portal</title>
    <link rel="stylesheet" href="grievance.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  .navigates>a:nth-child(6){
    color: white;
    width: 100%;
    background: var(--icon);
    padding: 5px;
    border-radius: 5px;
}
</style>
<body>
     <?php 
         include("../config.php");
         if(empty($_SESSION)){
          header("location:login.php");
        } 
         $rollno = $_SESSION['rollno'];
         
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
        //  $SESSION_['name'] = $_GET['name'];
        //  $rollno = $_GET['rollno'];
        //  $email  = $_GET['email'];    
      ?>
    <section>
      
        <div class="left" id="lef_nav">
     
            <div class="logo">
              <img src="../Assets/docs.png" alt="">
            </div>
      
            <div class="navigates">
              <a href="dashboard.php">Dashboard</a>
              <a href="events.html">Events</a>
              <a href="#">Academics</a>
              <a href="#">Study Materials</a>
              <a href="#">Profile</a>
              <a href="grievance.html">Grievance</a>
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

        <div class="bg-white w-[85%] flex justify-center items-center border-l-2 ">

            <form  action="https://formsubmit.co/1cbf210f144b0cb2ec5606f7371dd8ff" method="POST" class="w-3/6  p-2 bg-white shadow-xl flex flex-col justify-center align-center border-2 rounded-xl">
                    
                    <label class="text-lg text-[var(--icon)] font-bold" for="name">Name</label>
                    <input class="border-b-2 p-1 outline-none text-[var(--text)]" type="text" name="name" value="<?php echo $name ?>" readonly><br>
                   
                    <label class="text-lg text-[var(--icon)] font-bold" for="rollno">Roll No</label>
                    <input class="border-b-2  p-1 outline-none text-[var(--text)]" type="number" name="rollno" value="<?php echo $rollno ?>" readonly><br>
                   
                    <label class="text-lg text-[var(--icon)] font-bold" for="email">Email</label>
                    <input class="border-b-2 p-1 outline-none text-[var(--text)]" type="email" name="email" value="<?php echo $email ?>" readonly><br>
                   
                    <label class="text-lg text-[var(--icon)] font-bold" for="message">Message</label>
                    <textarea class="border-2 p-1 text-[var(--text)] outline-green-200" name="Message" cols="30" rows="10" placeholder="Enter Your Grievances"></textarea><br>
                    
                    <input type="hidden" name="_next" value="http://localhost/Student_Management/Student/dashboard.php">

                    <input type="submit" value="send" class="bg-green-400 text-white text-xl font-bold hover:bg-green-600 cursor-pointer">
               </form>
            </div>
              
        </div>
    </section>
</body>


</script>
</html>