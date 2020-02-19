<?php
     $host='remotemysql.com';
     $username='eLqkF6tlh2';
     $password='oxEAC0ZWwY';
     $database='eLqkF6tlh2';

     $connection=mysqli_connect($host,$username,$password,$database);

     if(!$connection){
       die("Connection failed." . mysqli_error($connection));
     }
      $sum = 0;
      $id = $_SESSION['id'];
      $sqlne = "SELECT * FROM emails WHERE to_id='$id' AND active = '1' AND is_read = '0'";
	  $sql_resulte=mysqli_query($connection,$sqlne);
	  while ($num = mysqli_fetch_assoc($sql_resulte)) {
	    $sum += 1;
	  }
	  
	  $_SESSION['notif'] = $sum;
?>