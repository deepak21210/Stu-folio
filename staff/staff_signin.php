<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff Sginin</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</script>
</head>
<body>

<div class="container">
    <div class="title">Registration</div>
    <div class="content">
      
    <form action="staff_register.php" method="POST">
       
    <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>

          
          <div class="input-box">
            <span class="details">Register Number</span>
            <input type="text" name="rno" placeholder="Enter your register number" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Create your password" required>
          </div>

          <div class="input-box">
            <div class="g-recaptcha" data-sitekey="6LeNe1kpAAAAAKiIFzBLHZEeLoD3KqnNcdr_qDrE"></div>
          </div>
          </div>
          
        <div class="button">
          <input type="submit" class='btn' value="Register">
        </div>
      </form>
      <h3>Already a user ?<span ><a href="index.php"> Login Here</a></span></h3>
    </div>
  </div>

  
</body>

<script >
    $(document).on('click', '.btn', function(){
      var response = grecaptcha.getResponse();
      if(response.length==0){
        alert("Please Verify you are not a bot");
        return false;
      }
    })
</script>

</html>