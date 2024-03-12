<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  include("../config.php");
  echo "<h1> Request </h1>";
  $sql = "SELECT name,email FROM signin where status=0";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " id: " . $row["email"]. " - Name: " . $row["name"].  
     " <form action='verify.php' method='POST'>
         <select name='ver'>
            <option value='none' selected disabled hidden>Select an Option</option> 
            <option name='id' value='1' >Active</option>
            <option name='id' value='0' >Deactive</option>
          </select>
          <input type='hidden' name='email' value=".$row["email"].">
          <input type='submit' value='verify'>
      </form>
      <br> " ;
  }
} else {
  echo "0 results";
}
$conn->close();
?>


</form>
</body>

</html>

