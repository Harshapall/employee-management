<?php
include('config.php');
$query="INSERT INTO report_umpl SELECT * FROM emp_umpl A  WHERE NOT EXISTS (
    SELECT *
    FROM report_umpl B
    WHERE A.id = B.id and A.dates=B.dates
)";
$result=mysqli_query($con,$query);
if ($con->query($query) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $query . "<br>";
}
?>
