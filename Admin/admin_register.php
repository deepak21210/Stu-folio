<?php
        include("../config.php");
        $usr = $_POST['usr'];  
        $password = $_POST['password'];  
          
           
          
            $sql = "select *from admin where user_name = '$usr' and password = '$password'";  
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            $sql = "SELECT name FROM admin WHERE username='$usr'";
            $result = $conn->query($sql);
      
            if($count == 1){ 
                session_start();
                $_SESSION['name'] = "ADMIN";
                header("Location: http://localhost/Student_Management/admin/admin_home.php
                ", true, 301);  
                exit();
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
    ?>