<?php   
 include 'config.php';  
 if ($_SERVER['REQUEST_METHOD'] == "POST") {  
      $location= $_REQUEST['loc'];  
      $que="SELECT * FROM emp_loc";
      $result = mysqli_query($con,$que);
      $rows=mysqli_num_rows($result);
      $rows+=1;

      $que2="SELECT* FROM emp_loc
      WHERE  location='$location'";
      $result2 = mysqli_query($con,$que2);
      $rows2=mysqli_num_rows($result2);
      if($rows2<1)
      {
      $query = "insert into `emp_loc` values('$rows','$location') ";  
      $run = mysqli_query($con,$query); 
      echo "Added";
      }
      else{
          echo "Already Added";
      } 
 }  
 ?>  