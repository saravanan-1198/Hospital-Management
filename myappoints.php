 <?php require 'common.php';
         if(!isset($_SESSION['email'])){
          die("Only for Login user can access!!");
         }
         
?>  

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
    	 <title>V S Hospital</title>
    </head>
    <body>
    	 <?php 
       include 'header.php';
       ?>
       
       <center>
        <div class="col-md-6 col-md-offset-3" style="margin-top:100px;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Doctor Visted</th>
                    <th scope="col">Report</th>
                    <th></th>
                 </tr>
             </thead> 
              <tbody>  
             <?php
                $user_id=$_SESSION['p_id'];
         // $query="SELECT problem,date1 FROM  INNER JOIN items WHERE users_items.user_id=$user_id AND users_items.item_id=items.id";
         $query="SELECT problem,date1 FROM
          $result=mysqli_query($con,$query);
         if(mysqli_num_rows($result)==0){
            echo "Add items to the cart first!";
         }
         else{
            $sum=0;
            while($row = mysqli_fetch_assoc($result))
            {
         ?>
                 <tr style="height:50px;">
                 <td><?php $id ?> </td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['price'] ?>  </td>
                  <td> <a href="cart-remove.php?id={$row['id']}" class='remove_item_link'> Remove</a> </td>
                  </tr>
         <?php 
          $sum=$sum+$row['price'];
          } 
          ?>   
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>  <?php echo "RS.".$sum  ?></td>
                    <td><a href="success.php ? id={$row['id']} " class="btn btn-primary">Confirm Order</a>
                    </td>
                    </tr> 
             </tbody>
            <?php } ?>
        </table>
    </div>
      </center>

           <?php include 'footer.php';
     ?>

</body>
</html>
