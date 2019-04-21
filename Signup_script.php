 <?php require 'common.php';
          if(isset($_SESSION['email'])){
          header('location:Appointment.php');
         }
         $name=mysqli_real_escape_string($con,$_POST['name']);
         $email=mysqli_real_escape_string($con, $_POST['email']);
         $password=mysqli_real_escape_string($con, $_POST['pwd']);
         $contact=mysqli_real_escape_string($con,$_POST['contact']);
         $city=mysqli_real_escape_string($con,$_POST['city']);         
         $address=mysqli_real_escape_string($con,$_POST['address']);
          $query="SELECT * FROM patient_details WHERE email='$email' AND password='$password'";
         $result=mysqli_query($con,$query);
         if(mysqli_num_rows($result)>0){
            header('location: Signup.php? email_error="Already EmailId Exists"');
         }
         else{
         $query1="INSERT INTO patient_details (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address') ";
           $id=mysqli_insert_id($con);
       
         $result1=mysqli_query($con,$query1);
         
         if($email=="" OR  $password=="") {
            header('location: index.php? email_error="Invalid EmailId or Password"');
         }
         else{
            #$_SESSION['email']=$email;
           #$_SESSION['p_id']=$id;
            header('location:login.php');
         }
         }
         
         


         ?>

      