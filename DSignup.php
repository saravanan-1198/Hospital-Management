       
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
    	 <title>V S Hosiptal</title>
    </head>
    <body>
    	 <?php 
       include 'header.php';
       if(isset($_SESSION['demail'])){
          header('location:DAppointment.php');
         }
       ?>
       <div class="container">
         <center>   
        <h2><div class="title">DOCTOR SIGN UP</div></h2>
        <form method="POST" action="DSignup_script.php">
        <div class="form-group row">
            <div class="at_center form_block">
           <input type="name" class="form-control" id="name" placeholder="Name" name="name">

       </div>
        </div>
        <div class="form-group row">
             <div class="at_center form_block">
            <input type="email" class="form-control" id="demail" placeholder="Email" name="demail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
             
            
        </div>
      </div>
        <div class="form-group row">
             <div class="at_center form_block">
          <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd" pattern=".{6,}">
          
        </div>
    </div>
        <div class="form-group row">
             <div class="at_center form_block">
          <input type="contact" class="form-control" id="contact" placeholder="Contact" name="contact" pattern="[0-9]{8,10}]">
          
        </div>
    </div>
        <div class="form-group row">
             <div class="at_center form_block">    
                   <input type="text" class="form-control" id="domain" placeholder="Domain" name="domain">
        </div>
    </div>
        <div class="form-group row">
            <div class="at_center form_block">
          <input type="text" class="form-control" id="spec" placeholder="Specialised in " name="spec">
        </div>
        <!-- <div class="form-group row">
            <div class="at_center form_block">
          <input type="text" class="form-control" id="disease" placeholder="Disease" name="Disease">
        </div> -->
    </div>

        <button type="submit" class="btn btn-primary at_center name="but">Submit</button>
        <br>
        <br>
      <span>Already have an acoount? <a href="DLogin.php">LOGIN</a></span>
  
       <?php 
        
        if(isset($_POST["but"]))
         { ?>

          <div><?php echo $_GET['email_error']; ?> </div>
        <?php } 
         
        ?>

        </form>
    </div>
</center>


         <?php include 'footer.php';
     ?>

      </body>
    </html>

