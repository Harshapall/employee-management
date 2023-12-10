<?php
include('config.php');
if(isset($_POST['submit']))
{
$sno=$_POST['sno'];
$id=$_POST['id'];
$name=$_POST['name'];
$shifts=$_POST['shifts'];
$hour=$_POST['hour'];
$location=$_POST['locate'];
$shoot=$_POST['shoot'];
$contracter=$_POST['contracter'];
$Date=$_POST['date'];

$query="insert into emp_sairap values('$sno','$id','$name','$shifts','$hour','$location','$shoot','$contracter','$Date')";
if ($con->query($query) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $query . "<br>";
}
} 
?>
<html>
    <head>
    <style>
            * {
                box-sizing: border-box;
                font-family: 'poppins', sans-serif;
            }
            .body{
                position: absolute;
                top: 60px;
                width: calc(100% - 260px);
                min-height: calc(100vh - 60px);
                left: 260px;
                background: #f5f5f5;
            }
            .button{
                background-color: #4CAF50;;
                border: none;
                color: white;
                width: 65px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 0px 2px;
                margin-left: 60px;
                border-radius: 16px;
            }
            
/* charts */

.charts {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 20px;
    width: 65%;
    padding: 20px;
    padding-left: 20px;
    padding-top: 0;
}

.chart {
    background-color: #fff;
    padding: 20px;
    padding-left: 20px;
    border-radius: 10px;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    width: 65%;
}

.chart h2 {
    margin-bottom: 5px;
    font-size: 20px;
    color: #666;
    text-align: center
}

@media (max-width:1115px) {
    .sidebar {
        width: 60px;
    }
    .main {
        width: calc(100% - 60px);
        left: 60px;
    }
}

@media (max-width:880px) {
    /* .topbar {
        grid-template-columns: 1.6fr 6fr 0.4fr 1fr;
    } */
    .fa-bell {
        justify-self: left;
    }
    .cards {
        width: 100%;
        padding: 35px 20px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }
    .charts {
        grid-template-columns: 1fr;
    }
    .doughnut-chart {
        padding: 50px;
    }
    #doughnut {
        padding: 50px;
    }
}
.for{

    margin-left: 50px;
}

.select{
    margin-left: 50px;
}

@media (max-width:500px) {
    .topbar {
        grid-template-columns: 1fr 5fr 0.4fr 1fr;
    }
    .logo h2 {
        font-size: 20px;
    }
    .search {
        width: 80%;
    }
    .search input {
        padding: 0 20px;
    }
    .fa-bell {
        margin-right: 5px;
    }
    .cards {
        grid-template-columns: 1fr;
    }
    .doughnut-chart {
        padding: 10px;
    }
    #doughnut {
        padding: 0px;
    }
    .user {
        width: 40px;
        height: 40px;
    }
}
        </style>
</head>
<body>
<div class="charts">
        <div class="chart"">
                        <form  method="post">
                        <input class="for"  type="number" name="id" placeholder="Enter employe id" required><br><br>
                        <input class="for"   type="text" name="name" placeholder="Enter employe name" required><br><br>
                        <select class="select" name="shifts">
                                <option value="">Select Shift</option>
                                <option value="A">A</option>
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="GG">GG</option>
                                <option value="BR">BR</option>
                                <option value="D1">D1</option>
                                <option value="B">B</option>
                                <option value="B1">B1</option>
                                <option value="N3">N3</option>
                                <option value="C">C</option>
                                <option value="C1">C1</option>
                            </select><br></br>
                        <input class="for"  type="number" name="hour" placeholder="Enter worked hours" required><br><br>
                        <select class="select"  name="locate">
                            <option value="">Select Location</option>
                            <?php 
                            $query ="SELECT * FROM emp_loc";
                            $result =mysqli_query($con,$query);
                            if($result->num_rows> 0){
                                while($row=mysqli_fetch_array($result)){
                                $option =$row['location'];
                            ?>
                            <option value="<?php echo $option; ?>"><?php echo $option; ?> </option>
                            <?php
                                }
                            }?>
                        </select><br></br>
                        <input class="for" type="text" name="shoot" placeholder="Enter shoot/event" required><br><br>
                            <select class="select" name="contracter">
                                <option value="">Select contracter</option>
                                <option value="Siva Sai">Siva Sai</option>
                                <option value="Raptor">Raptor</option>
                            </select><br></br>
                        <input class="for" type="date" name="date"placeholder="Enter Date" required><br><br>
                        <input type="submit" name="submit" value="Save" class="button" >
                        </form>
        </div>
</div>

</form>

</body>

</html>