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
    <div class="row">
      <div class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
             <span class="fa fa-envelope"></span> Love Mail
            </a>
          </div>
          <ul class="navbar-nav">
          </ul>
        </div>
      </div>
    </div>
    

    <div class="row">
     <div class="col-md-3">
     </div>
     <div class="col-md-6">

      <?php
       session_start();
       if(isset($_SESSION['error_message'])){
      ?>
      <div class="alert alert-danger">
      <span class="fa fa-exclamation-circle"></span> 
      <?php
        echo $_SESSION['error_message'];
      ?>
      </div>
      <?php
       unset($_SESSION['error_message']);
       }
      ?>

      <div class="panel panel-primary">
        <div class="panel-heading">
          <span class="fa fa-users"></span> Account Registration
        </div>
        <div class="panel-body">
          <form method="post" action="executes/saveuser.php">
          <p>Last Name</p>
          <input class="form-control" type="text" name="last_name" required>
          <p>First Name</p>
          <input class="form-control" type="text" name="first_name" required>
          <p>Middle Name</p>
          <input class="form-control" type="text" name="middle_name">
          <p>Birthdate</p>
          <input class="form-control" type="date" name="bdate" required>
          <p>E-mail</p>
          <input class="form-control" type="email" name="email" required>
          <p>Password</p>
          <input class="form-control" type="password" name="password1" required>
          <p>Re-type Password</p>
          <input class="form-control" type="password" name="password2" required><br />
          <button type="submit" class="btn btn-success">
            <span class="fa fa-save"></span> Save
          </button>
          <a class="btn btn-default" href="index.php">
            <span class="fa fa-arrow-left"></span> Back to main
          </a>
          </form>
        </div>
      </div>
     </div>
     <div class="col-md-3">
     </div>
    </div>



    <?php include 'includes/footer.php'; ?>
  </div>
 </div>
  <script src="vendors/jquery/jquery.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.js"></script>
  <script src="vendors/carousel/carousel.js"></script>
 </body>
</html>








