<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashoard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
:root{
    --primary : #4d44b5;
    --secondary : #ffffff;
    --icon : #fb7d5b;
    --text : #303972;
    --bg: #f3f4ff; 
    --minor : #fcc43e;
}
body{
    font-family: 'Poppins';
}
</style>

<?php
    include("../config.php");
    $sql = "SELECT * FROM signin WHERE status = 0";
    if ($result = mysqli_query($conn, $sql)) {
    $_SESSION['count'] = mysqli_num_rows( $result );
  }
?>

<body class='w-full h-[100vh] bg-white '>
    <nav class='w-full h-[10vh] bg-white shadow-md flex justify-between items-center px-5 sticky top-0'>
        <img src="../Assets/logo_slcs.jpg" alt="">
        <div class="links flex gap-[1.5rem] text-xl text-[var(--text)] font-semibold">
            <a href="#" class="hover:text-blue-600">SLCS</a>
            <a href="#" class="hover:text-blue-600">LOREM</a>
            <a href="#"  class="hover:text-blue-600">LOREM</a>
            <button class="bg-red-500 text-white px-2 rounded hover:bg-red-600">Logout</button>
        </div>
    </nav>

    <section class="w-full flex ">
        <div class="navigates flex flex-col border-r w-[25%] h-[90vh] items-center gap-[2rem] px-5 pt-[30px] font-bold text-xl text-[var(--text)] fixed">
            <a href="staff.php"class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Dashboard</a>
            <a href="subject.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Subjects</a>
            <a href="uploads.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Upload</a>
            <a href="schedule.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Schedules</a>
            <a href="events.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Events</a>
            <a href="student_verify.php" class="bg-[var(--icon)] text-white w-full p-2 rounded-xl text-center relative" >Verification <div class="absolute bg-red-600 rounded-full px-2 right-0 top-0 "><?php echo $_SESSION['count'] ?></div></a>
            <a href="grievance.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Grevances</a>
            <img src="../Assets/docs.png" class="w-[250px] h-[100px]">
        </div>

        <div class="w-[75%] h-[90vh] flex flex-col justify-center items-end flex-1">

                 <table class='table-auto w-[75%]'>
                    <tr class='sticky top-[63px]'>
                       <th class='border-2 p-1 border-black bg-blue-700 text-white'>Profile</th>
                       <th class='border-2 border-black bg-blue-700 text-white'>Name</th>
                       <th class='border-2 border-black bg-blue-700 text-white'>Rollno</th>
                       <th class='border-2 border-black bg-blue-700 text-white'>Verification</th>
                    </tr>
                   
               
            <?php 
              while($row = $result->fetch_assoc()) {
                
                echo "<tr>
                        <td class='border-2  border-black px-[20px] py-1'><img src=".$row["image"]." class= 'border-2  w-[75px] h-[75px] rounded-full'></td>
                        <td class='text-center text-xl border-2 border-black'>".$row["name"]."</td>
                        <td class='text-center text-xl border-2 border-black'>".$row["rollno"]."</td>
                        <td class='text-center border-2 border-black'>
                          <form  action='verify.php' method='POST'>
                            <select name='ver' class='border-2'>
                              <option value='none' selected disabled hidden>Select an Option</option> 
                              <option class='bg-green-600 text-white' name='id' value='1' >Active</option>
                              <option class='bg-red-600 text-white'  name='id' value='0' >Deactive</option>
                             </select>
                             <input type='hidden' name='email' value=".$row["email"].">
                             <input type='submit' value='verify' class='bg-green-600 text-white px-1 rounded cursor-pointer hover:bg-green-700'>
                         </form>
                        </td>
                        <br>
                      </tr>";
              }
            ?>
             </table>
        </div>
    </section>
    
</body>

</html>