<?php
   $first_name=$_POST['first_name'];
   $middle_name=$_POST['middle_name'];
   $last_name=$_POST['last_name'];
   $bdate=$_POST['bdate'];
   $email=$_POST['email'];
   $password1=$_POST['password1'];
   $password2=$_POST['password2'];
   require 'connection.php';
   $sqli = "SELECT * FROM users";
   mysqli_query($connection,$sqli)
  
   session_start();
      if($password1<>$password2){
        
        $_SESSION['error_message']="Invalid username or password";
        header("Location:../register.php");
      } else {
        while($row=mysqli_fetch_assoc($sql_result))
        {
          if ($email == $row['email']){
            $_SESSION['email_exist']="Email is already exist. Please Change.";
          }else{
            $sql="INSERT INTO users (last_name,first_name,middle_name,bdate,email,password, date_created) VALUES ('$last_name','$first_name','$middle_name','$bdate','$email',md5('$password1'), CURRENT_TIME)";
            if(!mysqli_query($connection,$sql)){
              die("error" . mysqli_error($connection));
            }
            header("Location:../index.php");
          }
         
        }
      }
?>








