 <?php require 'common.php';
          
         $prb=mysqli_real_escape_string($con,$_POST['prm']);
         $desc=mysqli_real_escape_string($con, $_POST['desc']);
         $date=mysqli_real_escape_string($con, $_POST['date']);
         $id=$_SESSION['p_id'];
         $query1="INSERT INTO patient_description (p_id,problem,description,datetime1) VALUES ('$id','$prb','$desc','$date') ";
           $id=mysqli_insert_id($con);
       
         $result1=mysqli_query($con,$query1);
         
         
           
               if ( isset( $_POST['but'] ) ) 
         { 
?><script language="javascript">
alert("appointment successfully sent")
window.location.href="index.php"
</script>
<?php       }     
         


         ?>

      