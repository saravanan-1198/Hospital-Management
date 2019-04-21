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
      <br>
      <br>
      <br>
      <br>

        <?php
  require 'common.php';
  //$quer="SELECT p_id,problem,datetime1 from patient_description p, doctor_details d WHERE description=domain; ";
  //$result=mysqli_query($con,$quer);
  //$query_row=mysqli_fetch_array($result);
  $result = mysqli_query($con,"SELECT p_id,problem,datetime1 from patient_description p, doctor_details d WHERE description=domain; ");
  echo "<table border =\"4\" style='border-collapse: collapse' align='center'>";
?>
<tr>
  <th>
    <?php echo "P_ID"
    ?>
  </th>
  <th>
    <?php echo "Problem"
    ?>
  </th>
  <th>
    <?php echo "Date"
    ?>
  </th>
</tr>

<?php
while ($row = mysqli_fetch_array($result)) {
   ?>

    <tr>
      
     <td> 
      <?php echo $row['p_id'] 
      ?>
        
      </td>
     <td>  
      <?php echo $row["problem"] 
      ?> 
      </td>
    <td> 
    <?php 
   echo  $row["datetime1"] 
     ?>
       
     </td> 
    </tr>
    <?php
  }        
       
?>
     



     <?php include 'footer.php';
     ?>

        </body>
        </html>
