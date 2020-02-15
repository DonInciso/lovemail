<?php
   require 'connection.php';
   
   $email=$_POST['email'];
   $password=$_POST['password'];
   $newpassword=md5($password);

  $sql="SELECT * FROM users WHERE email='$email' 
        AND password='$newpassword' AND active='1'";

  $result=mysqli_query($connection,$sql);
  $users=mysqli_fetch_assoc($result);
  
  if($users){
   $first_name=$users['first_name'];
   $last_name =$users['last_name'];
   $id=$users['id'];
   $email=$users['email'];
   session_start();
   $_SESSION['first_name']=$first_name;
   $_SESSION['last_name']=$last_name;
   $_SESSION['id']=$id;
   $_SESSION['email']=$email;
    header("Location:../main.php");
  } else {
    session_start();
    $_SESSION['error_message']="Invalid username or password.";
    header("Location:../index.php");
  }
?>