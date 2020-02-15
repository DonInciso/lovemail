<?php 
  require 'executes/connection.php';
  
  
 ?>

      <div class="col-md-4">
       <div class="panel panel-info">
         <div class="panel panel-heading">
           Welcome: <?php echo  $_SESSION['first_name'] . ' ' . $_SESSION['last_name']  ; ?>
         </div>
         <div class="panel panel-body">
          <a class="btn btn-block btn-default" href="main.php">
            <span class="fa fa-inbox"></span> Inbox
            <?php 
            if ($_SESSION['notif'] != 0) {
            ?>
             <span class="badge"> 
              <?php 
                echo $_SESSION['notif'];
               ?>

             </span>

             <?php
             $_SESSION['notif'] = 0;
             } 

            ?>
          </a>
          <a class="btn btn-block btn-default" href="compose.php">
            <span class="fa fa-edit"></span> Compose
          </a>
          <a class="btn btn-block btn-default" href="sent.php">
            <span class="fa fa-paper-plane"></span> Sent
          </a>
          <a class="btn btn-block btn-default" href="trash.php">
            <span class="fa fa-trash"></span> Trash
          </a>
         </div>
       </div>
     </div>