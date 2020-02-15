<?php 
	session_start();
    require 'connection.php';
    $id = $_SESSION['id'];
	$first_name=$_POST['first_name'];
	$middle_name=$_POST['middle_name'];
	$last_name=$_POST['last_name'];
	$bdate=$_POST['bdate'];
	$email=$_POST['email'];
	$currentpassword=md5($_POST['currentpassword']);
	$oldpassword = $_SESSION['currentpassword'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];

	if($oldpassword == $currentpassword){
		if($password1 == $password2){
			$sql = "UPDATE users SET first_name='$first_name', last_name = '$last_name', middle_name= '$middle_name', bdate= '$bdate', email='$email', password=md5('$password2'), date_modified= CURRENT_TIME WHERE id = '$id'";
			if(!mysqli_query($connection,$sql)){
		      die("error" . mysqli_error($connection));
		    }
			$_SESSION['error_msg']="Account Updated";
			$_SESSION['alert']="alert-success";

	    	header("Location:../displayacc.php");
		}else{
			$_SESSION['error_msg']="New Password Mismatched";
			$_SESSION['alert']="alert-danger";
	    	header("Location:../displayacc.php");
		}
	   
	}
	else{
		$_SESSION['error_msg']="Incorrect Current Password ";
		$_SESSION['alert']="alert-danger";
	    header("Location:../displayacc.php");
	}

 ?>