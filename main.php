<?php
  include 'includes/is_login.php';
  include 'executes/connection.php';
  $id=$_SESSION['id'];
  $sql="SELECT emails.*, users.* FROM emails INNER JOIN users ON emails.from_id=users.id WHERE emails.to_id='$id' AND emails.active='1' ORDER BY email_id DESC";
  // $sql = "SELECT ";
  $sql_result=mysqli_query($connection,$sql);
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
          <!-- <tbody data-link='row' class="rowlink"> -->
          <tbody>

            <?php
               while($row=mysqli_fetch_assoc($sql_result))
               {
      
          

             echo "<tr >";  
              // <!-- <form method="post" action="executes/deletemsg.php"> -->
               echo "<td>" . $row['email'] . "</td>";
               echo "<td>" . $row['email_date_created'] . "</td>";
               echo "<td>" . $row['subject'] . "</td>";
               echo "<td>";
               echo "<a class='btn btn-info' href='view.php?view=" . $row['email_id'] . "'><span class='fa fa-eye'></span></a><a> </a>";
               echo "<a class='btn btn-info' href='reply.php?view=" . $row['email_id'] . "'><span class='fa fa-reply'></span></a><a> </a>";
               echo "<a  class='btn btn-danger' href='executes/deletemsg.php?id=" . $row['email_id'] . "' ><span class='fa fa-trash'></span></a><a> </a>";
               if($row['is_read'] ==0){
                  echo "<span class='label label-success'>New</span>";

               }
               echo "</td>";
             // <!-- </form> -->
             echo "</tr>";
               }
            ?>
             
          </tbody>
	</table>
     </div>
    </div>

    <?php include "includes/buttom.php"; ?>






