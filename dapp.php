<php
  require 'common.php';
  $quer="SELECT p_id,problem,datetime1 from patient_description p, doctor_details d WHERE description=domain; ";
  $result=msqli_query($con,$quer);
  $query_row=msqli_fetch_array($result);
  foreach($query_row as $row)
  {
  	echo $row['p_id'];
  	echo $row['problem'];
  	echo $row['datetime1'];
  }        
       
?>
