<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                    <a class="navbar-brand" href="index.php">V S HOSPITAL</a>
                </div>
                 <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['email'])){
                        ?>
                        <li><a href="myappoints.php"><span class="glyphicon glyphicon-shopping-cart"></span> MY Appoints</a></li>
                        <li><a href="Settings.php"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
                        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <?php
                         }
                         else if (isset($_SESSION['demail'])) {
                         ?>
                         <li><a href="Settings.php"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
                        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        
                         <?php
                         }
                         else 
                         {
                         ?>
                          <ul class="nav navbar-nav navbar-right">
                        <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                       }
                       ?>

                    </ul>
                    </ul>
                </div>
            </div>
</nav>
        