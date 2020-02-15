<?php 
	require 'connection.php';

	

	if($_GET['id']){
		$id = $_GET['id'];
		$sql = "UPDATE emails SET active ='0' WHERE email_id = '$id' ";

		if (mysqli_query($connection,$sql)){
			mysqli_close($connection);
			header("Location: ../main.php");
		}
	}
	
	else if($_GET['view']){
		$id2 = $_GET['view'];
		$sql = "UPDATE emails SET active ='0' WHERE email_id = '$id2' ";

		if (mysqli_query($connection,$sql)){
			mysqli_close($connection);
			header("Location: ../view_sent.php");
		}
	}
	// else if($_GET['id_view']){
	// 	$id3 = $_GET['id_view'];

	// 	$sql = "UPDATE emails SET active ='0' WHERE email_id = '$id3' ";

	// 	if (mysqli_query($connection,$sql)){
	// 		mysqli_close($connection);
	// 		header("Location: ../sent.php");
	// 	}
	// }
	// else if($_GET['view_sent']){
	// 	$id4 = $_GET['view_sent'];

	// 	$sql = "UPDATE emails SET active ='0' WHERE email_id = '$id4' ";

	// 	if (mysqli_query($connection,$sql)){
	// 		mysqli_close($connection);
	// 		header("Location: ../sent.php");
	// 	}
	// }


	



	// header("Location: main.php");
 ?>