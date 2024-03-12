<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="detail.css">
</head>
<body>
 <?php
    include("mark.php");
    $sql = "SELECT status FROM signin WHERE rollno='$rollno'";
            $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
      
          $status = $row["status"];
        }}
  ?>
<div class="content">
    <div class="left">
      <?php echo'<img src="'.$image.'"alt="Cover" id="left">';?>
      <h1 id="rollno"><?php echo "$rollno" ?></h1>
      <div class="result">
       <button class="res"><a href="">Semester 1</a></button><br>
       <button class="res"><a href="">Semester 2</a></button><br>
       <button class="res"><a href="">Semester 3</a></button><br>
       <button class="res"><a href="">Semester 4</a></button><br>
       <button class="res"><a href="">Semester 5</a></button><br>  
      
      </div>
    </div>

    <div class="right">
       
      <h1 id="wel"> Welcome! <span><?php echo "$name"  ?></span></h1>

      <?php
      if($status==1){
        
    echo" <table class='tbl' style='width : 50%'>
        <tr>
          <th>Semester 1 Mark</th>
          <td><?php echo '$sem1_per';?>%</td>
        </tr>
        <tr>
          <th>Semester 1 Attendance</th>
          <td><?php echo '$sem1_attend';?>%</td>
        </tr>

        <tr>
          <th>Semester 2 Mark</th>
          <td><?php echo '$sem2_per';?>%</td>
        </tr>
        <tr>
          <th>Semester 2 Attendance</th>
          <td><?php echo '$sem2_attend';?>%</td>
        </tr>

        <tr>
          <th>Semester 3 Mark</th>
          <td><?php echo '$sem3_per';?>%</td>
        </tr>
        <tr>
          <th>Semester 3 Attendance</th>
          <td><?php echo '$sem3_attend';?>%</td>
        </tr>

        <tr>
          <th>Semester 4 Mark</th>
          <td><?php echo '$sem4_per';?>%</td>
        </tr>
        <tr>
          <th>Semester 4 Attendance</th>
          <td><?php echo '$sem4_attend';?>%</td>
        </tr>

        <tr>
          <th>Semester 5 Mark</th>
          <td><?php echo '$sem5_per';?>%</td>
        </tr>
        <tr>
          <th>Semester 5 Attendance</th>
          <td><?php echo '$sem5_attend';?>%</td>
        </tr>
        
      </table>";
     }
      else{
        echo '<h1>You are not verified Yet please wait';
      }
      ?>
  </div>

</div>
</body>
</html>

