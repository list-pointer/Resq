<!-- nav bar -->


<div class="header">
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h3 class="col l2 offset-50" ><b><a href="index.php" style="
      font-size:41px;color: #fff;" ></i>&nbsp &nbsp<img src="img/logo/logo.png" style="margin-top:-15px; width:65px"> ResQ</a></b></h3>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li ><a href="service.php">Services</a></li>
          <li><a href="index.php#about">About</a></li>
          
          <li><a href="index.php#contact">Contact</a></li>
<?php

                if (isset($_SESSION['user'])) {
                  ?>
              <li><a href="logout.php">Logout</a></a></li>
                <?php
                } else {
                  ?>
                

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Customer <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="login.php">Customer Login</a></a></li>
              <li><a href="signup.php">Customer Signup</a></li>
            </ul>
          </li>

                <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Garage <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="login-garage.php">Garage Login</a></li>
              <li><a href="signup-garage.php">Garage Signup</a></li>
            </ul>
          </li>
          <?php
                }
                ?>

            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>

    <!--nav bar end-->
















          