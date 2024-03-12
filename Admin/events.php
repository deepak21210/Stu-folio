<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload_Events</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
    }
</style>

<?php
include('../config.php');
$sql = "SELECT * FROM staff_signin WHERE status = 0";
if ($result = mysqli_query($conn, $sql)) {
    $_SESSION['count'] = mysqli_num_rows($result);
}
?>

<?php
$msg = '';

if (!empty($_SESSION['status'])) {
    if ($_SESSION['status'] == true) {

        $msg = "Event Successfully Uploaded";
        unset($_SESSION['status']);
    }

}
?>



<body class='w-full  bg-white'>
    <nav class='w-full h-[10vh] shadow-md flex justify-between items-center px-5'>
        <img src="../Assets/logo_slcs.jpg" alt="">
        <div class="links flex gap-[1.5rem] text-xl text-[var(--text)] font-semibold">
            <a href="#" class="hover:text-blue-600">SLCS</a>
            <a href="#" class="hover:text-blue-600">LOREM</a>
            <a href="#" class="hover:text-blue-600">LOREM</a>
            <button class="bg-red-500 text-white px-2 rounded hover:bg-red-600">Logout</button>
        </div>
    </nav>

    <section class="w-full flex  h-[90vh]">
        <div class="navigates flex flex-col border-r w-[25%]  items-center gap-[2rem] px-5 pt-[30px] font-bold text-xl text-[var(--text)]">
            <a href="admin_home.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Dashboard</a>
            <a href="subject.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Subjects</a>
            <a href="uploads.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Upload</a>
            <a href="schedule.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Schedules</a>
            <a href="events.php" class="bg-[var(--icon)] text-white w-full p-2 rounded-xl text-center ">Upload Events</a>
            <a href="edit.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Edit Events</a>
            <a href="student_verify.php" class=" w-52 text-center ease-out duration-300 hover:bg-[var(--icon)] relative  hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Verification <div class="absolute text-white bg-red-600 rounded-full px-2 right-0 top-0"><?php echo $_SESSION['count']; ?></div></a>

        </div>



        <div class=" w-[75%] h-[90vh] flex flex-col justify-around items-center ">
            <h1 id="msg" class="text-green-700 text-center text-xl font-bold"><?php echo $msg; ?></h1>
            <form action="event_upload.php" method="POST" enctype="multipart/form-data" class="w-[95%]  px-5 py-2 bg-white shadow-xl border-2 rounded-xl flex flex-col">

                <div class="flex justify-between ">

                    <div>
                       
                        <label class="text-lg text-[var(--icon)] font-bold" for="name">Title</label><br>
                        <input class="border-b-2 p-1 outline-none text-[var(--text)] w-[200px]" type="text" name="name" placeholder="Enter The Title" required><br>
                    </div>

                    <div>
                       <label class="text-lg text-[var(--icon)] font-bold">Thumnail</label><br>
                       <input type="file" name="image" required>
                    </div>

                    <div>
                      <label class="text-lg text-[var(--icon)] font-bold">Video Link</label><br>
                      <input class="border-b-2 p-1 outline-none text-[var(--text)] w-[250px]" type="text" name="link" placeholder="Past The Video Link">
                    </div>

                </div>

                

                <label class="text-lg text-[var(--icon)] font-bold mt-5" for="message">Detail</label>
                <textarea class="border-2 p-1 text-[var(--text)] outline-green-200" name="message" cols="30" rows="10" placeholder="Enter About The Event" required></textarea><br>



                <input type="submit" value="submit" class="bg-green-400 text-white text-xl font-bold hover:bg-green-600 cursor-pointer">
            </form>
        </div>
        </div>
    </section>

    <script>
        setTimeout(() => {
            document.getElementById('msg').style.visibility='hidden';

        }, 5000)
    </script>

</body>

</html>