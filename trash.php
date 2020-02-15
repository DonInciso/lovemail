<?php
  include 'includes/is_login.php';
  include 'executes/connection.php';
  $id=$_SESSION['id'];
  $sql="SELECT emails.*, users.* FROM emails INNER JOIN users ON emails.from_id=users.id WHERE (emails.to_id='$id' OR emails.from_id='$id') AND emails.active='0' ORDER BY email_id DESC";
  $sql_result=mysqli_query($connection,$sql)
?>

    <?php include "includes/top.php"; ?>

    <div class="row">
     <?php include "includes/sidebar.php"; ?>
     <div class="col-md-8">
  <table class="table table-striped table-hover">
          <thead>
      <tr>
             <th>From</th>
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
              <?php  echo "<a class='btn btn-info' href='view_trash.php?view=" . $emails['email_id'] . "'><span class='fa fa-eye'></span></a>" ?>
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
