<?php
include('config.php');
$query="INSERT INTO report_sairap SELECT * FROM emp_sairap A  WHERE NOT EXISTS (
    SELECT *
    FROM report_sairap B
    WHERE A.id = B.id and A.dates=B.dates
)";
$result=mysqli_query($con,$query);
if ($con->query($query) === TRUE) {
    echo "record inserted successfully into SAIRAP";
} else {
    echo "Error: " . $query . "<br>";
}
?>