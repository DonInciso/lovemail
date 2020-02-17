<?php
  include 'includes/is_login.php';
  include 'executes/connection.php';
  $id=$_SESSION['id'];
 

  $sql_emails = "SELECT * FROM users";
  $sql_result=mysqli_query($connection,$sql_emails);

?>

<!DOCTYPE html>
<html>
 <head>
  <title>Bootstrap</title>
  <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap-old.css">
  <link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="vendors/carousel/carousel.css">
 </head>
 <body>
 <div class="wrapper">
  <div class="container">
    <?php
      
     include "includes/navigation.php"; 
     ?>

    <div class="row">
      <?php include 'includes/sidebar.php'; ?>
    
     <div class="col-md-8">
	<div class="panel">
          <div class="panel panel-body">
            <div class="row">
            <form method="post" action="executes/sendemail.php">
              <p>From</p>
              <input class="form-control" type="text" value="<?php echo $_SESSION['email'] ?>" readonly>
              <p>To</p>
              <select class="form-control" name="send_to" >
                <?php 
                  while ($emails=mysqli_fetch_assoc($sql_result)) {
                    unset($id);
                    unset($email);
                    $id = $emails['id'];
                    $email = $emails['email'];
                    $first_name = $emails['first_name'];
                    $last_name = $emails['last_name'];
                  
              
                echo "<option value=' " . $id . " '>" . $email . ' ('. $first_name . ' ' . $last_name . ')'  "</option>";
                
                  }
                 ?>
              </select>
              <p>Subject</p>
              <input class="form-control" type="text" placeholder="Subject" name="subject" required>
              <p>Content</p>
              <textarea class="form-control" rows="5" placeholder="Content goes here..." name="content"></textarea>
             </div>  
             <br />
             <div class="row"> 
              <button type="submit" onclick="alert()" class="btn btn-success">
               <span class="fa fa-paper-plane"></span> SEND
              </button>
              <a class="btn btn-default" href="main.php">
               <span class="fa fa-arrow-left"></span> BACK
              </a>
            </form>
            
           </div>    
         </div>
        </div>
     </div>
    </div>

   <?php include 'includes/footer.php'; ?>
  </div>
 </div>
  <script > 
    function alert(){
      alert("Message Sent!");
    }
  </script>
  <script src="vendors/jquery/jquery.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.js"></script>
  <script src="vendors/carousel/carousel.js"></script>
 </body>
</html>








