<?php
  include("../config.php");
  if(!isset($_POST['submit']))
  {
   $id=$_POST['veri'];
   $res=$_POST['resu'];
   $sql = "UPDATE staff_signin SET status = '$id' WHERE register_no= '$res' ";
   if ($conn->query($sql) === TRUE){
    header("location:http://localhost/Student_Management/Admin/admin.php");
   }
   else{
    echo "failed";
   }
  }


?>