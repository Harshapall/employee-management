<?php   
 include 'config.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `report_umpl` WHERE id = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:view_ukmpl.php');  
      }else{  
           echo "Error: ".mysqli_error($con);  
      }  
 }  
 ?> 