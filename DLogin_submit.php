   <?php require 'common.php';
      if(isset($_SESSION['demail'])){
          header('location:DAppointment.php');
         }
         $demail=mysqli_real_escape_string($con, $_POST['demail']);
         $password=mysqli_real_escape_string($con, $_POST['pwd']);
         $query="SELECT * FROM doctor_details WHERE demail='$demail' AND password='$password' ;";
         $result=mysqli_query($con,$query);
         if(mysqli_num_rows($result)==0){
            header('location: index.php? email_error="Invalid EmailId or Password"');
         }
         else{
            $array=mysqli_fetch_array($result);
            $_SESSION['demail']=$array['demail'];
            $_SESSION['d_id']=$array['d_id'];
            header('location:DAppointment.php');
         }


         ?>

      