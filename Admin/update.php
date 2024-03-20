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
    
      $id=$_GET['id'];
  
      $sql ="UPDATE events SET Image = '$file_name', title = '$title', link = '$link', detail = '$msg' WHERE id = '$id'";
      if ($conn->query($sql) === TRUE) {
        if(move_uploaded_file($tempname, $folder)){
           header("location:edit.php");
          }
          else{
            header('location:./edit.php');
        } 
      }    
}

  
  ?>