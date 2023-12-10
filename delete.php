<?php   
 include 'config.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `emp_umpl` WHERE id = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:Ukmpl.php');  
      }else{  
           echo "Error: ".mysqli_error($con);  
      }  
 }  
 ?>  