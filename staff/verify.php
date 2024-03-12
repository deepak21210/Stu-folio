<?php
  include("../config.php");
  if(!isset($_POST['submit']))
  {
   $id=$_POST['ver'];
   $email=$_POST['email'];
   $sql = "UPDATE signin SET status = '$id' WHERE email= '$email' ";
   if ($conn->query($sql) === TRUE){
    header("location:http://localhost/Student_Management/Staff/student_verify.php");
   }
   else{
    echo "failed";
   }
  }


?>