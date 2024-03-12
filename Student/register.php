<?php
  include("../config.php");
  if(!isset($_POST['submit']))
   {
    $name=$_POST['name'];
    $rollno=$_POST['rno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql = "INSERT INTO signin (name, rollno, email, password, phone, image) VALUES ('$name', '$rollno', '$email', '$password', '---', 'http://slcs.in/uploads/images/student/$rollno.JPG')";

    if ($conn->query($sql) === TRUE) {
      session_start();
      $_SESSION['rollno'] = "$rollno";
      header("Location: http://localhost/Student_Management/Student/dashboard.php", true, 301);  
      exit();
    } else {
      $_SESSION['id']=1;
      header("Location: http://localhost/Student_Management/Student/signin.php"); 
    }
  }
?>  

