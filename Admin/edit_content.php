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
}
</style>
<?php 
  
  include('../config.php');
  if(isset($_GET['id'])){
    $event_id=$_GET['id'];
    $sql = "SELECT * FROM events WHERE id='$event_id'";
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $image = $row["Image"];
        $title = $row["title"];
        $detail = $row["detail"];
        $link = $row["link"];
     }
   } 
}
?>
<body>
    <div class="w-full h-[100vh] bg-white flex flex-col justify-center gap-[2rem]">
        <a class=" text-center ml-9 p-3 bg-blue-500 text-white w-[80px] rounded-md shadow shadow-white" href="./edit.php">Back</a>
        <div class=" w-[100%]  flex flex-col justify-around items-center ">
            <form action="update.php?id=<?php echo $event_id; ?>" method="POST" enctype="multipart/form-data" class="w-[95%]  px-5 py-2 bg-white shadow-xl border-2 rounded-xl flex flex-col">

                <div class="flex justify-between ">

                    <div>

                        <label class="text-lg text-[var(--icon)] font-bold" for="name">Title</label><br>
                        <input class="border-b-2 p-1 outline-none text-[var(--text)] w-[200px]" type="text" name="name" placeholder="Enter The Title" value="<?php echo $title ?>" required><br>
                    </div>

                    <div>
                        <label class="text-lg text-[var(--icon)] font-bold">Thumnail</label><br>
                        <input type="file" name="image" required>
                    </div>

                    <div>
                        <label class="text-lg text-[var(--icon)] font-bold">Video Link</label><br>
                        <input class="border-b-2 p-1 outline-none text-[var(--text)] w-[250px]" type="text" name="link" placeholder="Past The Video Link" value="<?php echo $link ?>">
                    </div>

                </div>



                <label class="text-lg text-[var(--icon)] font-bold mt-5" for="message">Detail</label>
                <textarea class="border-2 p-1 text-[var(--text)] outline-green-200" name="message" cols="30" rows="10" placeholder="Enter About The Event" required ><?php echo $detail ?></textarea><br>



                <input type="submit" value="submit" class="bg-green-400 text-white text-xl font-bold hover:bg-green-600 cursor-pointer">
            </form>
        </div>
    </div>
    </div>


</body>

</html>