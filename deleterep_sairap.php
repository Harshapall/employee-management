<?php   
 include 'config.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `report_sairap` WHERE id = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:view_sairap.php');  
      }else{  
           echo "Error: ".mysqli_error($con);  
      }  
 }  
 ?> 