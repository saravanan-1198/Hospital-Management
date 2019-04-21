 <?php require 'common.php';
          if(isset($_SESSION['demail'])){
          header('location:DAppointment.php');
         }
         $name=mysqli_real_escape_string($con,$_POST['name']);
         $demail=mysqli_real_escape_string($con, $_POST['demail']);
         $password=mysqli_real_escape_string($con, $_POST['pwd']);
         $contact=mysqli_real_escape_string($con,$_POST['contact']);
         $domain=mysqli_real_escape_string($con,$_POST['domain']);         
         $spec=mysqli_real_escape_string($con,$_POST['spec']);
          $query="SELECT * FROM doctor_details WHERE demail='$demail' AND password='$password'";
         $result=mysqli_query($con,$query);
         if(mysqli_num_rows($result)>0){
            header('location: DSignup.php? email_error="Already EmailId Exists"');
         }
         else{
         $query1="INSERT INTO doctor_details (name,demail,password,contact,domain,specialist) VALUES ('$name','$demail','$password','$contact','$domain','$spec') ";
           $id=mysqli_insert_id($con);
       
         $result1=mysqli_query($con,$query1);
         
         if($demail=="" OR  $password=="") {
            header('location: index.php? email_error="Invalid EmailId or Password"');
         }
         else{
            #$_SESSION['email']=$email;
           #$_SESSION['p_id']=$id;
            header('location:Dlogin.php');
         }
         }
         
         


         ?>

      