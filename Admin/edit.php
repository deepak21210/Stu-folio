<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Events</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    :root {
        --primary: #4d44b5;
        --secondary: #ffffff;
        --icon: #fb7d5b;
        --text: #303972;
        --bg: #f3f4ff;
        --minor: #fcc43e;
    }

    body {
        font-family: 'Poppins';
        position: relative;
    }

    .hide{
       width: 500px;
       height: 500px; 
      background-color: #4d44b5;
      position: absolute;
      top: 0;
    } 
</style>

<?php
include('../config.php');
$sql = "SELECT * FROM staff_signin WHERE status = 0";
if ($result = mysqli_query($conn, $sql)) {
    $_SESSION['count'] = mysqli_num_rows($result);
}
?>

<body class='w-full h-screen bg-white'>
    <nav class='bg-white w-full h-[10vh] shadow-md flex justify-between items-center px-5 sticky top-0'>
        <img src="../Assets/logo_slcs.jpg" alt="">
        <div class="links flex gap-[1.5rem] text-xl text-[var(--text)] font-semibold">
            <a href="#" class="hover:text-blue-600">SLCS</a>
            <a href="#" class="hover:text-blue-600">LOREM</a>
            <a href="#" class="hover:text-blue-600">LOREM</a>
            <button class="bg-red-500 text-white px-2 rounded hover:bg-red-600">Logout</button>
        </div>
    </nav>

    <section class="w-full flex ">
        <div class="navigates flex flex-col border-r w-[25%] h-[90vh] items-center gap-[2rem] px-5 pt-[30px] font-bold text-xl text-[var(--text)]  sticky top-12">
            <a href="staff.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center" >Dashboard</a>
            <a href="subject.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Subjects</a>
            <a href="uploads.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Upload</a>
            <a href="schedule.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Schedules</a>
            <a href="events.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Upload Events</a>
            <a href="edit.php" class="bg-[var(--icon)] text-white w-full p-2 rounded-xl text-center ">Edit Events</a>
            <a href="student_verify.php" class=" w-52 text-center ease-out duration-300 hover:bg-[var(--icon)] relative  hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Verification <div class="absolute text-white bg-red-600 rounded-full px-2 right-0 top-0"><?php echo $_SESSION['count']; ?></div></a>
        </div>

         <div class="edit w-[100%] flex  justify-center gap-5 flex-wrap pt-5">
               <?php
                   $sql="SELECT  * from events ORDER BY id DESC";
                   $result = mysqli_query($conn,$sql);
                   while($row = mysqli_fetch_assoc($result)){
                      $event_id = $row['id'];
                      ?>
                       <div class="event w-[320px] h-[400px] border-2 flex flex-col justify-between shadow-xl  ">
                          
                          <div class="w-full h-[60%]" >
                            <img class="w-full h-full" src="./Images/<?php echo $row['Image'];?>" >
                          </div>
                         
                           <div class="px-1">
                           <h1 class="text-[var(--text)] font-bold text-xl"><?php echo $row['title'] ?></h1>
                            <h1 class="text-gray-500"><?php echo $row['date'] ?></h1>
                            <a class="text-[var(--icon)] font-bold underline" href="<?php echo $row['link']?>">Video Link </a>  
                           </div> 
                                         
                            <div class="flex justify-around items-center">            
                              <a class="bg-red-500 text-white text-center px-2 py-1  w-[30%]" href="#">Delete</a>
                              <a class="bg-green-500 text-white text-center px-2 py-1  w-[40%]" href="#">Edit Content</a>
                              <a class="btn bg-blue-500 text-white text-center px-2 py-1  w-[30%]" href="view.php?id=<?php echo $event_id; ?>" >View</a>
                               
                            </div>
                          
                      </div>
                      <?php
                   }
               ?>
         </div>
    </section>



</body>

</html>