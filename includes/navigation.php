    <div class="row">
      <div class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" onclick="sysy()" href="#">
             <span class="fa fa-envelope"></span> Love Mail
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="main.php">Home</a></li>
            <li>
              <a class="dropdown-toggle" data-toggle="dropdown"
              href="#">
                <span class='fa fa-exclamation-circle'></span>
                Notification
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
                <span class="caret"></span> 
              </a>
            </li>
            <li>
              <a class="dropdown-toggle" data-toggle="dropdown"
              href="#">
                <span class="fa fa-user"></span> 
                
                <?php echo $_SESSION['last_name'] . ', ' . $_SESSION['first_name']; ?>
                <span class="caret"></span> 
              </a>
              <ul class="dropdown-menu">
                 <li>
                   <a href="displayacc.php">
                      <span class="fa fa-edit"></span> 
                      Edit Account
                  </a>
                 </li>
                 <li>
                   <a href="executes/logout.php">
                      <span class="fa fa-sign-out"></span> 
                      Sign-out
                  </a>
                 </li>
          </ul>
        </div>
      </div>
    </div>

    <script >
      function sysy(){
        alert('Thank You For Using Love Mail, ENJOY!!!');
      }
    </script>