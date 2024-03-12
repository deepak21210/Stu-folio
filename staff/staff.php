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
$sql = "SELECT * FROM signin WHERE status = 0";
if ($result = mysqli_query($conn, $sql)) {
    $_SESSION['count'] = mysqli_num_rows($result);
}
?>

<body class='w-full h-screen bg-white'>
    <nav class='w-full h-[10vh] shadow-md flex justify-between items-center px-5'>
        <img src="../Assets/logo_slcs.jpg" alt="">
        <div class="links flex gap-[1.5rem] text-xl text-[var(--text)] font-semibold">
            <a href="#" class="hover:text-blue-600">SLCS</a>
            <a href="#" class="hover:text-blue-600">LOREM</a>
            <a href="#" class="hover:text-blue-600">LOREM</a>
            <button class="bg-red-500 text-white px-2 rounded hover:bg-red-600">Logout</button>
        </div>
    </nav>

    <section class="w-full flex ">
        <div class="navigates flex flex-col border-r w-[25%] h-[90vh] items-center gap-[2rem] px-5 pt-[30px] font-bold text-xl text-[var(--text)]">
            <a href="staff.php" class="bg-[var(--icon)] text-white w-full p-2 rounded-xl text-center ">Dashboard</a>
            <a href="subject.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Subjects</a>
            <a href="uploads.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Upload</a>
            <a href="schedule.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Schedules</a>
            <a href="events.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Events</a>
            <a href="student_verify.php" class=" w-52 text-center ease-out duration-300 hover:bg-[var(--icon)] relative  hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Verification <div class="absolute text-white bg-red-600 rounded-full px-2 right-0 top-0"><?php echo $_SESSION['count']; ?></div></a>
            <a href="grievance.php" class="ease-out duration-300 hover:bg-[var(--icon)] hover:text-white hover:w-full hover:p-2 hover:rounded-xl hover:text-center">Grievances</a>
        </div>

        <div class="profile ">
            <div class="card">

            </div>
        </div>
    </section>

</body>

</html>