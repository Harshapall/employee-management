<?php   
 include 'config.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `emp_loc` WHERE location = '$id'";  
      $run = mysqli_query($con,$query);    
 }  
 ?>  