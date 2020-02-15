<?php
  include 'includes/is_login.php';
  include 'executes/connection.php';
  $id=$_SESSION['id'];
 

    $email_id = $_GET['view'];
    
    $sql_message = "SELECT emails.*, users.* FROM emails INNER JOIN users ON emails.from_id=users.id WHERE email_id = '$email_id' AND emails.active='1'";
    $result=mysqli_query($connection,$sql_message);
    $email_all=mysqli_fetch_assoc($result);

    $from_id = $email_all['email'];
    $from_user_id = $email_all['id'];
    $subject = $email_all['subject'];
    $content = $email_all['content'];
?>

    <?php include "includes/top.php"; ?>

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
              <!-- <input class="form-control" type="text" value="<?php //echo $from_id; ?>" readonly> -->
              <select class="form-control" name="send_to" >
                <?php 
                echo "<option value=' " . $from_user_id . " '>" . $from_id .   "</option>";
                 ?>
              </select>
              <p>Subject</p>
              <input class="form-control" type="text" placeholder="Subject" name="subject" required>
              <p>Content</p>
              <textarea class="form-control" rows="5" placeholder="Content goes here..." name="content"></textarea>
             </div>  
             <br />
             <div class="row"> 
              <button type="submit"  class="btn btn-success">
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

    <?php include "includes/buttom.php"; ?>








