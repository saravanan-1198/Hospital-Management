<?php
$con = mysqli_connect("localhost","root","","hosiptal") or die(msqli_error($con));
if(!isset($_SESSION)) 
    {  session_start();
    }
 ?>

