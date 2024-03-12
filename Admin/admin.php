<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verification</title>
</head>
<body>

<div class="container">

   <div class="table">
   <?php
  include("../config.php");
  $sql = "SELECT name,register_no FROM staff_signin where status=0";
  $result = $conn->query($sql);

 echo "<table>";
 echo "<tr>
          <th>Register Number</th>
          <th>Name</th>
       </tr>";
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo " <tr> id: " . $row["register_no"]. " - Name: " . $row["name"].  
     " <form action='admin_verify.php' method='POST'>
         <select name='veri'>
            <option value='none' selected disabled hidden>Select an Option</option> 
            <option name='id' value='1' >Active</option>
            <option name='id' value='0' >Deactive</option>
          </select>
          <input type='hidden' name='resu' value=".$row["register_no"].">
          <input type='submit' value='verify'>
      </form>
      <br> </tr>" ;
  }
} else {
  echo "0 results";
} echo "</table>";
$conn->close();
?>
   </div>
</div>


</body>

</html>

