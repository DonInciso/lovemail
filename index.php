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
            <a class="navbar-brand" href="#">
             <span class="fa fa-envelope"></span> Love Mail
            </a>
          </div>
          <ul class="navbar-nav">
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="jumbotron">
        <h1>Gugma Mail <span class="fa fa-heart"></span></h1>
        <p>Welcome to Gugma Mail...</p>
      </div>
    </div>
    <div class="row">
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
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <span class="fa fa-info-circle"></span> Login to Continue
          </div>
          <div class="panel-body">
            <form method="post" action="executes/validate.php">
              <p>Email:</p>
              <input type="email" class="form-control" name="email" required>
              <p>Password:</p>
              <input type="password" class="form-control" name="password" required>
              <br />
              <button type="submit" class="btn btn-success 
               btn-block">
              <span class="fa fa-key"> Login
              </button>
              Not yet a member? <a href="register.php">Register Here!</a>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div id="myslider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myslider" data-slide-to="0" class="active"></li>
            <li data-target="#myslider" data-slide-to="1"></li>
            <li data-target="#myslider" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img src="images/a.jpg">
               <div class="carousel-caption">This is my caption...</div>
            </div>
            <div class="item">
               <img src="images/b.jpg">
               <div class="carousel-caption">This is my caption...</div>
            </div>
            <div class="item">
               <img src="images/c.jpg">
               <div class="carousel-caption">This is my caption...</div>
            </div>
          </div>
        </div>

        <a class="left carousel-control" href="#myslider"
         role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myslider"
         role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
    <?php include 'includes/footer.php' ?>
  </div>
 </div>
  <script src="vendors/jquery/jquery.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.js"></script>
  <script src="vendors/carousel/carousel.js"></script>
 </body>
</html>








