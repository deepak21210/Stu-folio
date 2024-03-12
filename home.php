<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stufolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        margin: 0;
        padding: 0;
        font-family: 'Poppins';
    }
</style>
<body class="w-full h-[100vh]">
    <nav class="bg-[#37517e] w-full h-[10vh] flex justify-between items-center px-24">
        <h1 class="text-white font-bold text-3xl">STU-FOLIO</h1>
        <div class="text-white flex gap-16 text-xl">
            <a href="home.html" class="underline">Home</a>
            <a href="#">SLCS</a>
            <a href="#">EVENTS</a>
            <a href="#">YOUTUBE</a>
        </div>
        <a class="bg-white px-2 rounded " href="#">Login</a>
    </nav>
    <section class="bg-[#37517e] w-full h-[70vh] flex justify-between items-center px-24  gap-10">
       <div class="w-[50%] h-[70vh] flex flex-col gap-10 items-center justify-center ">
        <h1 class="text-white font-bold text-xl">Embark on a journey of exploration and discovery, where every click brings you closer to success</h1>
        
        <div class="flex w-full gap-10">
            <div class="flex flex-col items-center">
                 <h1 class="counter text-yellow-500 text-2xl" data-target="5000">0</h1>
                 <h1 class="text-red-700 text-2xl font-bold">+</h1>
                 <h2 class="text-white text-xl">Graduated Students</h2>
            </div>

            <div class="flex flex-col items-center">
                <h1 class="counter text-yellow-500 text-2xl" data-target="500">0</h1>
                <h1 class="text-red-700 text-2xl font-bold">+</h1>
                <h2 class="text-white text-xl">Faculty</h2>
           </div>

           <div class="flex flex-col items-center">
            <h1 class="counter text-yellow-500 text-2xl" data-target="150">0</h1>
            <h1 class="text-red-700 text-2xl font-bold">+</h1>
            <h2 class="text-white text-xl">MoUs</h2>
           </div>

        </div>

        <div class="w-full flex  gap-3 ">
            <a class="bg-green-600 hover:bg-green-700 text-white px-2 text-xl font-bold rounded-md shadow-xl" href="./Student/login.php">LOGIN</a>
            <a class="bg-green-600  hover:bg-green-700 text-white px-2 text-xl font-bold rounded-md shadow-xl" href="./Student/signin.php">REGISTER</a>
            <a class="bg-red-600  hover:bg-red-700 text-white px-2 text-xl font-bold rounded-md shadow-xl" href="#">YOUTUBE</a>
            <a class="bg-blue-600  hover:bg-blue-700 text-white px-2 text-xl font-bold rounded-md shadow-xl" href="#">FACEBOOK</a>
        </div>
       </div>

       <div class="w-[50%] h-[70vh]">
           <img src="https://bootstrapmade.com/demo/templates/Arsha/assets/img/hero-img.png" class="w-full">
       </div>

    </section>
    <footer class="w-full  h-[20vh] bg-white flex justify-between items-center px-24">
        <img src="./Assets/docs.png" class="w-[250px] h-[100px]"> 
        <img src="./Assets/slcslogo.png" class="w-[125px] ">
        <img src="./Assets/stu-folio.oz" class="w-[150px]">
        <img src="./Assets/logo_slcs.jpg" class="w-[350px]">
    </footer>
</body>
<script src="count.js"></script>
</html>