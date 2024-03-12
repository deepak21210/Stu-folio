<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Admin Login</div>
    <div class="content">
    <form action="admin_register.php" method="POST">
    <div class="user-details">
     
    <div class="input-box">
            <span class="details">Admin Name</span>
            <input type="text" name="usr" placeholder="Enter your username" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
    </div>
        <div class="button">
          <input type="submit" value="Login">
        </div>


    </form>
    </div>
  </div>
  
</body>
</html>