<?php require 'common.php';
     if(!isset($_SESSION['email'])){
          header('location:index.php');
         }

?>

<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet">
    	 <title>V S Hospital</title>
    </head>
    <body>
    	 <?php 
       include 'header.php';
       ?>


        <div class="container">
         <center>   
        <h2><div class="title">Change Password</div></h2>
        <form method="POST" action="settings_script.php">
        <div class="form-group row">
            <div class="at_center form_block">
           <input type="password" class="form-control" id="pwd" placeholder="Old Password" name="oldpwd">
       </div>
        </div>
        <div class="form-group row">
             <div class="at_center form_block">
            <input type="password" class="form-control" id="pwd" placeholder="New Password" name="newpwd">
        </div>
      </div>
        <div class="form-group row">
             <div class="at_center form_block">
          <input type="password" class="form-control" id="pwd" placeholder="Re-type New Password" name="repwd">
        </div>
    </div>
  
      <button type="submit" class="btn btn-primary" name="but">Change</button>
     
       <?php
         if(isset($_POST["but"]))
         { ?>

           
           <div><?php echo $_GET['mismatch']; ?> </div>
           <div><?php echo $_GET['passwordsucc']; ?> </div>

           <div><?php echo $_GET['fail']; ?> </div>

         <?php } 
        ?>

        </form>
    </div>
</center>


        <footer>
        <div class="container">
       <center> <p>Copyright© V S Hospital.All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
      </footer>
    </body>
    </html>


        