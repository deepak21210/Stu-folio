<?php
include('../config.php');
if(!isset($_POST['submit'])){
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'Images/'.$file_name;
    $title = $_POST['name'];
    $link = $_POST['link'];
    $msg = $_POST['message'];
    $link = substr($link,-31);
             

    $query = mysqli_query($conn,"Insert into events (Image,title,link,detail) values ('$file_name','$title','$link','$msg')");

    if(move_uploaded_file($tempname, $folder)){
        $_SESSION['status']=true;
        header('location:./events.php');
    }

    else{
        $_SESSION['status']=false;
        header('location:./events.php');
    }

}
else{
    echo "Failed";
}

?>