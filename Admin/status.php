<?php
 $sql = "SELECT COUNT(rollno) as count from signin;";
 $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
      $stu_count = $row["count"];
   }
}

$sql = "SELECT COUNT(register_no) as count from staff_signin;";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     $staff_count = $row["count"];
  }
}

?>