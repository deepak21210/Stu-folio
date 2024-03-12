<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       
        include('../config.php');
        if(isset($_GET['id'])){
             $id = $_GET['id'];
             echo $id;
             $_SESSION['id']=$id;
             $_SESSION['status']=1;
             header("location:edit.php");
        }
    ?>
</body>
</html>