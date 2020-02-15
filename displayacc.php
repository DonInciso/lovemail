   <?php 
	include 'includes/is_login.php';
	include 'executes/connection.php';
	$id=$_SESSION['id'];
	$sql = "SELECT * FROM users WHERE id='$id'";
	$sql_result=mysqli_query($connection,$sql);	

    ?>


    <?php include "includes/top.php"; ?>

		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">

					<?php
				       if(isset($_SESSION['error_msg'])){
				      
				      echo "<div class='alert ". $_SESSION['alert'] ."'>";

				      echo"<span class='fa fa-exclamation-circle'></span> "; 
				      
				        echo $_SESSION['error_msg'];
				      ?>
				      </div>
				      <?php
				       unset($_SESSION['error_msg']);
				       }
			     	?>


				  <div class="panel panel-primary">
			        <div class="panel-heading">
			          <span class="fa fa-edit"></span> Edit Account
			        </div>
			        <div class="panel-body">
			        <?php
		               while($row=mysqli_fetch_assoc($sql_result))
		               {

				          echo "<form method='post' action='executes/updateacc.php'>";
				          echo "<p>Last Name*</p>";
				          echo "<input class='form-control' type='text' name='last_name' value='". $row['last_name'] ."' required>";
				          echo "<p>First Name*</p>";
				          echo "<input class='form-control' type='text' name='first_name' value='". $row['first_name'] ."' required>";
				          echo "<p>Middle Name</p>";
				          echo "<input class='form-control' type='text' name='middle_name' value='". $row['middle_name'] ."'>";
				          echo "<p>Birthdate*</p>";
				          echo "<input class='form-control' type='date' name='bdate' value='". $row['bdate'] ."' required>";
				          // echo "</form>";
			      		
			          ?>
			        </div>
			      </div>
			      <div class="panel panel-primary">
			        <div class="panel-heading">
			          <span class="fa fa-cog"></span> Security
			        </div>
			        <div class="panel-body">
			        <?php
				          // echo "<form method='post' action='executes/updateacc.php'>";			        		
				          echo "<p>E-mail*</p>";
				          echo "<input class='form-control' type='email' name='email' value='". $row['email'] ."' required>";
				          $_SESSION['currentpassword'] = $row['password'];
				          echo "<p>Current Password*</p>";
				          echo "<input class='form-control' type='password' name='currentpassword'  required>";
				          echo "<p>New Password*</p>";
				          echo "<input class='form-control' type='password' name='password1' required><br />";
				          echo "<p>Re-type New Password*</p>";
				          echo "<input class='form-control' type='password' name='password2' required><br />";
				          echo "<button type='submit' class='btn btn-success'>";
				          echo "  <span class='fa fa-save'></span> Save";
				          echo "</button>";
				          echo "<a> </a>";
				          echo "<a class='btn btn-default' href='main.php'>";
				          echo "  <span class='fa fa-arrow-left'></span> Back to main";
				          echo "</a>";
				          echo "</form>";
			      		}
			          ?>
			        </div>
			      </div>
			</div>
			<div class="col-md-3"></div>
		</div>





    <?php include "includes/buttom.php"; ?>
