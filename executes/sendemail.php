<?php 
	session_start();
	$id = $_SESSION['id'];
	$send_to = $_POST['send_to'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];

	require 'connection.php';

	$sql = "INSERT INTO emails (from_id, to_id, subject, content, email_date_created) VALUES ('$id' , '$send_to', '$subject' , '$content', CURRENT_TIME)";
	if(!mysqli_query($connection,$sql)){
      die("error" . mysqli_error($connection));
     }
     header("Location:../compose.php");


 ?>