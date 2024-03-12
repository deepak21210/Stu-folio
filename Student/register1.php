<?php
        include("../config.php");
        $rollno = $_POST['rno'];  
        $password = md5($_POST['password']);  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($conn, $username);  
            $password = mysqli_real_escape_string($conn, $password);  
          
            $sql = "select * from signin where rollno = '$rollno' and password = '$password'";  
            $result = mysqli_query($conn, $sql); 
             
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              

            if($count == 1){ 
                $_SESSION['rollno'] = "$rollno";
                header("Location: http://localhost/Student_Management/Student/dashboard.php", true, 301);  
                exit();
            }  
            else{ 
                $_SESSION['id']=0;
                header("Location: http://localhost/Student_Management/Student/login.php");  
            }     
?>