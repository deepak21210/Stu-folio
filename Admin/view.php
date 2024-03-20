<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewEvents</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php 
       
       include('../config.php');
       if(isset($_GET['id'])){
            $id = $_GET['id'];
       }

       $sql = "SELECT * FROM events where id = '$id'";
       $result = $conn->query($sql);
      
       if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
           $image = $row["Image"];
           $title = $row["title"];
           $link = $row["link"];
           $detail = $row["detail"];
           $date = $row["date"];
        }
      } 
       
   ?>
<style>
    .background{
        background-image: linear-gradient(rgb(0,0,0,0.2),black),url('./Images/<?php echo $image ?>');
    }
</style>
<body>
   

    <div class="background w-full h-[100vh] flex ">
        <div class="left w-[50%] flex justify-center items-center">
            <div class="flex flex-col gap-[2rem] pl-5">
              <a class=" text-center p-3 bg-blue-500 text-white w-[80px] rounded-md shadow shadow-white" href="edit.php">Back</a>
              <img src="./Images/<?php echo $image ?>" class="w-full h-[50vh] shadow shadow-white rounded-md">
              <div class="flex items-center justify-between">
               <h1 class="text-blue-600 font-bold text-2xl"><?php echo $title ?></h1>
               <h1 class="text-slate-600 font-bold text-xl"><?php echo $date ?></h1>
              </div>
              <a class="text-orange-600 font-bold text-xl" href="<?php echo $link;?>" target="_blank">Video Link</a>
            </div>
        </div>
        <div class="right w-[50%] flex justify-center items-center">
           <div class = "w-[80%] h-[90vh] shadow-2xl rounded-md" >
             <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
             
             <textarea class="w-full p-2 text-gray-600 outline-none" name="" id="" cols="30" rows="10" readonly><?php echo $detail; ?></textarea>
            </div>
          
        </div>
    </div>
</body>
</html>z