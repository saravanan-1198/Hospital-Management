<!DOCTYPE html>
<html>
    <head>
       <?php require 'common.php';
       if(isset($_SESSION['email'])){
          header('location:Appointment.php');
         }
        ?>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet">
       <title>V S Hosiptal</title>
    </head>
    <body>
       <?php 
       include 'header.php';
       ?>

       <div class="panel panel-primary">
       <div class="panel-heading">LOGIN </div>
       <center>
       <div class="panel panel-warning">
            <div class="panel-body">Login to make a appointment</div>
       </div>
   </center>
       <form method="POST" class="form-horizontal" action="Login_submit.php">
       <div class="form-group row">
       <label class="control-label col-xs-2" for="email">Email:</label>
       <div class="col-xs-4">
           <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
             
           
       </div>
       </div>
       <div class="form-group row">
          <label class="control-label col-xs-2" for="pwd">Password:</label>
          <div class="col-xs-4"> 
           <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" >

          </div>
        </div>
  
        <div class="form-group"> 
        <div class="col-xs-offset-2 col-xs-10">
        <button type="submit" class="btn btn-primary" name="but">Submit</button>&nbsp;&nbsp;<span>Don't have an acoount? <a href="Signup.php">Register</a></span>
         <?php
         if(isset($_POST['but']))
         { ?>

           <div><?php echo $_GET['email_error']; ?> </div>
         <?php } 
        ?>
      </div>
        </div>
        </div>
       </form>
      
        <?php include 'footer.php';
     ?>

        </body>
        </html>