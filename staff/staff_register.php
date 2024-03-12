<?php
  include("../config.php");
  if(!isset($_POST['submit']))
   {
    $name=$_POST['name'];
    $resno=$_POST['rno'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "INSERT INTO Staff_signin (name, register_no, email, password) VALUES ('$name', '$resno', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
      $_SESSION['rollno'] = "$rollno";
      header("Location: http://localhost/Student_Management/staff/staff.php", true, 301);  
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>  
