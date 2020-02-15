<?php
  include 'includes/is_login.php';
  include 'executes/connection.php';
  $id=$_SESSION['id'];
  $sql="SELECT emails.*, users.* FROM emails INNER JOIN users ON emails.to_id=users.id WHERE emails.from_id='$id' AND emails.active='1' ORDER BY email_id DESC";
  $sql_result=mysqli_query($connection,$sql);
?>


    <?php include "includes/top.php"; ?>

    <div class="row">
     <?php include "includes/sidebar.php"; ?>
     <div class="col-md-8">
  <table class="table table-striped table-hover">
          <thead>
      <tr>
             <th>To</th>
             <th>Date</th>
             <th>Subject</th>
             <th><span class="fa fa-cog"></span></th>
      </tr>
          </thead>
          <tbody>
            <?php
               while($emails=mysqli_fetch_assoc($sql_result))
               {
            ?>
             <tr>
             <td><?php echo $emails['email']; ?></td>
             <td><?php echo $emails['email_date_created']; ?></td>
             <td><?php echo $emails['subject']; ?></td>
             <td>
              
              <?php  echo "<a class='btn btn-info' href='view_sent.php?view=" . $emails['email_id'] . "'><span class='fa fa-eye'></span></a>" ?>
              <!-- <?php  //echo "<a class='btn btn-danger' href='executes/deletemsg.php?id_view=" . $emails['email_id'] . " '><span class='fa fa-trash'></span></a>"?> -->
             </td>
            </tr>
            <?php
               }
            ?>
          </tbody>
  </table>
     </div>
    </div>

    <?php include "includes/buttom.php"; ?>
