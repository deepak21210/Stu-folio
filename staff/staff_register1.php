<?php
include("../config.php");
$resno = $_POST['rno'];
$password = $_POST['password'];



$sql = "select *from staff_signin where register_no = '$resno' and password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

$sql = "SELECT name FROM staff_signin WHERE register_no='$resno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    $name = $row["name"];
  }
}
if ($count == 1) {
  $_SESSION['rollno'] = "$rollno";
  header("Location: http://localhost/Student_Management/staff/staff.php", true, 301);
  exit();
} else {
  echo "<h1> Login failed. Invalid username or password.</h1>";
}
