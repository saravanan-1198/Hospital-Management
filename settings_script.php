<?php require 'common.php';
     if(!isset($_SESSION['email'])){
          header('location:index.php');
         }
     $op=$_POST['oldpwd'];
     $np=$_POST['newpwd'];
     $rp=$_POST['repwd'];
     if($np != $rp){
     	$mismatch="Retype new password doesnot match new password"; 
     }
     $query="SELECT * FROM patient_details where password=$op";
     if(mysqli_num_rows(mysqli_query($con,$query))){
     	$query1="UPDATE patient_details SET password=$np where password=$op";
     	if(mysqli_query($con,$query1)){
     		$passwordsucc="SUCCEFULLY UPDATED";
     	}

     }
     else{
     	$fail="old password doesnot match!!";
     	header('location: Setting.php');
     }

?>