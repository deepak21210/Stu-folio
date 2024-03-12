<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="grievance.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
  <style>
    .navigates>a:nth-child(2){
      color: white;
      width: 100%;
      background: var(--icon);
      padding: 5px;
      border-radius: 5px;
  }
  </style>

<body>

<?php
include('../config.php');
?>
  <section>
      
    <div class="left sticky top-0" id="lef_nav" >
 
        <div class="logo">
          <img src="../Assets/docs.png" alt="">
        </div>
  
        <div class="navigates">
          <a href="dashboard.php">Dashboard</a>
          <a href="events.html">Events</a>
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

     <div class="edit w-[85%] flex  justify-center gap-5 flex-wrap pt-5 border-l-2">
      <?php
          $sql="SELECT  * from events ORDER BY id DESC";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result)){
             $event_id = $row['id'];
             ?>
              <div class="event w-[320px] h-[400px] border-2 flex flex-col justify-between shadow-xl  ">
                 
                 <div class="w-full h-[60%]" >
                   <img class="w-full h-full" src="../Admin/Images/<?php echo $row['Image'];?>" >
                 </div>
                
                  <div class="px-1">
                  <h1 class="text-[var(--text)] font-bold text-xl"><?php echo $row['title'] ?></h1>
                   <h1 class="text-gray-500"><?php echo $row['date'] ?></h1>
                   <a class="text-[var(--icon)] font-bold underline" href="<?php echo $row['link']?>">Video Link </a>  
                  </div> 
                                
                   <div class="flex ">            
                     <a class="bg-blue-500 text-white text-center px-2 py-1  w-full" href="#">View More</a>
                   </div>
                 
             </div>
             <?php
          }
      ?>
</div>
</section>

</body>

