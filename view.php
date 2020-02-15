<?php
  include 'includes/is_login.php';
  include 'executes/connection.php';
  
 
 
    $email_id = $_GET['view'];
    
    $sql_message = "SELECT emails.*, users.* FROM emails INNER JOIN users ON emails.from_id=users.id WHERE email_id = '$email_id' AND emails.active='1'";
    $result=mysqli_query($connection,$sql_message);
    $email_all=mysqli_fetch_assoc($result);

    $from_id = $email_all['email'];
    $subject = $email_all['subject'];
    $content = $email_all['content'];

    $sql_update = "UPDATE emails SET is_read = '1' WHERE email_id = '$email_id'";
    mysqli_query($connection,$sql_update);
  
    
?>

    <?php include "includes/top.php"; ?>

    <div class="row">
      <?php include 'includes/sidebar.php'; ?>
    
     <div class="col-md-8">
	<div class="panel">
          <div class="panel panel-body">
            <div class="row">
              <p>From</p>
              <input class="form-control" type="text" value="<?php echo $from_id; ?>" readonly>
              <p>To</p>
              <input class="form-control" type="text" value="<?php echo $_SESSION['email'] ?>" readonly>
             
              <p>Subject</p>
              <input class="form-control" type="text" placeholder="Subject" name="subject" value="<?php echo $subject; ?>" readonly>
              <p>Content</p>
              <textarea class="form-control" rows="5" placeholder="<?php echo $content; ?>" name="content" readonly></textarea>
             </div>  
             <br />
             <div class="row"> 
              <?php  echo"<a  class='btn btn-success' href='reply.php?view=" . $email_id ."' >
               <span class='fa fa-reply'></span> REPLY
              </a>" ?>
              <a class="btn btn-default" href="main.php">
               <span class="fa fa-arrow-left"></span> BACK
              </a>
           </div>    
         </div>
        </div>
     </div>
    </div>

    <?php include "includes/buttom.php"; ?>









