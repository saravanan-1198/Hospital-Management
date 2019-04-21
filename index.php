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
        <link href="fff.css" rel="stylesheet">
        <title>V S Hospital </title>
    </head>

    <body>
      <?php
     include 'header.php';
     ?>
       <div id="banner_image">
        <div class="container">
          <div class="banner_content">
            <h1>Appointment Manager</h1>
      
 <br>
    <center> <a href="Signup.php" class="btn btn-danger
btn-lg active" role="button"> Patient</a>
     <br>
     <br>
     <br> <a href="DSignup.php" class="btn btn-danger
btn-lg active" role="button"> Doctor</a>
   </center>
 </div>
</div>
</div>

     </body>
     </html>
