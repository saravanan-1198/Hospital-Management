<!DOCTYPE html>
<html>
    <head>
       <?php require 'common.php';
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
       <div class="panel-heading">Make Appoints </div>
       <center>
       <div class="panel panel-warning">
            <div class="panel-body">Mention your Causes</div>
       </div>
   </center>
       <form method="POST" class="form-horizontal" action="app.php">
        
       <div class="form-group row">
          <label class="control-label col-xs-2" for="text">Problem</label>
          <div class="col-xs-4"> 
           <input type="text" class="form-control" id="prm" placeholder="Enter your problem" name="prm" >

          </div>
        </div>
 


       <div class="form-group row">
       <label class="control-label col-xs-2" for="text">Doctor Domain</label>
       <div class="col-xs-4">
           <input type="text" class="form-control" id="desc" placeholder="Enter your causes" name="desc" >
             
           
       </div>
       </div>
       
       <div class="form-group row">
       <label class="control-label col-xs-2" for="text">Appointment: </label>
        <div class="col-xs-4"> 
          <input type="date" name="date">
        </div>
      </div>


        <!-- <div class="form-group row">
          <label class="control-label col-xs-2" for="text">Doctor apppoints on </label>
          <div class="col-xs-4"> 
           <input type="text" class="form-control" id="date" placeholder="Enter date and time" name="date" >

          </div>
        </div>
   -->
        <div class="form-group"> 
        <div class="col-xs-offset-2 col-xs-10">
        <button type="submit" class="btn btn-primary" name="but">Submit</button>
        
        
       
      </div>
        </div>
       </form>
        </div>
      
     



     <?php include 'footer.php';

     ?>

        </body>
        </html>
