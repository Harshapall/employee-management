<!DOCTYPE html>

<html>

    <head>

        <title> search by employee id </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                margin-left: 0px;
                border-radius: 16px;
            }

            .button2{
                background-color:#008CBA;
                border: none;
                color: white;
                width: 100px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 0px 2px;
                margin-left: 0px;
                border-radius: 16px;
            }


            .button3{
                background-color:#008CBA;
                border: none;
                color: white;
                width: 100px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                float: right;
                margin: 0px 2px;
                margin-right: 20px;
                margin-left: 0px;
                border-radius: 16px;
            }

            .button4{
                background-color: red;
                border: none;
                color: white;
                width: 65px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 0px 2px;
                margin-left: 0px;
                border-radius: 16px;
            }
            .button5{
                background-color:palevioletred;
                border: none;
                color: white;
                width: 100px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 0px 2px;
                margin-left: 0px;
                border-radius: 16px;
            }

            .back{
                background-color:darkcyan;
                border: none;
                color: white;
                width: 100px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 0px 2px;
                margin-left: 480px;
                border-radius: 16px;
            }
            .backer{
                background-color:darkgoldenrod;
                float: right;
                border: none;
                color: white;
                width: 100px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 0px 2px;
                margin-left: 0px;
                border-radius: 16px;
            }

            .rep_btn{
                background-color:grey;
                float: right;
                border: none;
                color: white;
                width: 100px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 0px 2px;
                margin-left: 5px;
                border-radius: 16px;

            }
            
            .button7{
                background-color:green;
                float: right;
                border: none;
                color: white;
                width: 120px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 0px 2px 100px;
                margin-left: 440px;
                border-radius: 16px;
                margin-bottom:200px;
            }


            
/* charts */

.charts {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 20px;
    width: 122%;
    padding: 20px;
    padding-top: 0;
    margin-left: 10px;
    height: 480px;
}

.chart {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    width: 122%;
    margin-left: 10px;
    height: 480px;
}
.charts2 {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 20px;
    width: 122%;
    padding: 20px;
    padding-top: 0;
    margin-left: 10px;
    margin-bottom: 5px; 
    height: 600px; 
}

.chart2 {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    width: 122%;
    margin-left: 10px;
    margin-bottom: 5px;
    height: 600px;

}

.chart2 h2 {
    margin-bottom: 5px;
    font-size: 20px;
    color: #666;
    text-align: center
}


/*table design*/
header{  
      width: 100%;  
      height: 80px;  
      background-color: #2c3e50;  
 }  
 table1{  
    width: 75%;  
      position: absolute;  
      top: 70%;  
      left: 50%;  
      transform: translate(-50%,-50%);  
 } 
 

 table2{  
      width:75%;  
      position: absolute;  
      top:120%;
      left: 50%;  
      transform: translate(-50%,-50%);  
      margin-right: 120px;
 }  
 

 .heading{  
      background-color: #FFFF;  
 }  
 .heading th{  
  padding-top:1px;
  padding-bottom:1px;
  padding-left: 5px;
  padding-right: 5px;  
 }  
 .data{  
      text-align: center;  
      color: black;  
 }  
 .data td{  
    padding-top:1px;
  padding-bottom:1px;
  padding-left: 5px;
  padding-right: 5px; 
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
    .charts2 {
        grid-template-columns: 1fr;
    }
    .doughnut-chart {
        padding: 50px;
    }
    #doughnut {
        padding: 50px;
    }
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
.Dateplace{
    margin-left:47%;
}
        </style>

       
    </head>
    <body>
    <?php
         if(isset($_POST['settingdate']))
         {
            include('config.php');
             // id to search
             $dater =date('y-m-d',strtotime($_POST['setdate']));
             echo "date entered:";
             echo $dater;
             $query="UPDATE emp_umpl SET dates='$dater'";
             $result=mysqli_query($con,$query);
             if ($con->query($query) === TRUE) {
                echo "record inserted successfully";
            } else {
                echo "Error: " . $query . "<br>";
            }
         }

       
        ?>
    <div class="charts">
                <div class="chart"">
                <h4 style="text-align:center">---------------UKMPL PAGE--------------<h4>
                     <a href="Addnewemploye_ukml.php" class="button2">Add New Employee</a>
                     <a href="Sairaptor.php" class="backer">--->SAI / RAPTOR</a>
                     <a href="dashboard.php" class="back"><---Dashboard</a>
                     <form  method="post" class="Dateplace">
                             <br><input type="date" name="setdate" placeholder="set date"><br><br>
                            <input type="submit" name="settingdate" value="Set Date" class="button5"">
                        </form> 
                        <a href="report_ukmpl.php" class="rep_btn">SAVE TO DAILY REPORT</a>
                  <div>
                    <div style="float:left">
                        <form  method="post">
                            <br><br><input type="text" name="id" placeholder="Enter employee id"><br><br>
                            <input type="submit" name="search" value="Search" class="button">
                            <br></br>
                        </form>
                        <table class="table2" border="1" cellspacing="0" cellpadding="0">  
                            <tr class="heading">  
                            <th> S.No </th>  
                            <th> E.Code </th>  
                            <th> Name </th>  
                            <th> Shift </th>  
                            <th> Hrs </th>  
                            <th> Location </th>  
                            <th> Shooting/Event/Others </th>  
                            <th> Security Service </th> 
                            <th> Modified Date </th> 
                            </tr>  
                        <?php 
                            // php code to search data in mysql database and set it in input text
                            if(isset($_POST['search']))
                            {
                                // id to search
                                $id = $_POST['id'];
                                
                                // connect to mysql
                                $connect = mysqli_connect("localhost", "root", "","employe");
                                
                                // mysql search query
                                $query = "SELECT * FROM `emp_umpl` WHERE `id` = $id LIMIT 1";
                                
                                $result = mysqli_query($connect, $query);
                                
                                // if id exist 
                                // show data in inputs
                                if(mysqli_num_rows($result) > 0)
                                {
                                    $i=1;
                                    while ($row = mysqli_fetch_array($result))
                                    {  
                                                echo "  
                                                    <tr class='data'>  
                                                    <td>".$i++."</td>  
                                                        <td>".$row['id']."</td>
                                                        <td>".$row['name']."</td>
                                                        <td>".$row['shift']."</td>
                                                        <td>".$row['hour']."</td>
                                                        <td>".$row['location']."</td>
                                                        <td>".$row['shoot']."</td>
                                                        <td>".$row['service']."</td>
                                                        <td>".$row['dates']."</td>
                                                        <td><a href='updateemploye.php?id=".$row['id']."' class='button''>Update</a></td>
                                                        <td><a href='delete.php?id=".$row['id']."' class='button4'>Delete</a></td>  
                                                    </tr>  
                                                ";  
                                        }  
                                }
                                else{
                                    ?>
                                    <tr>
                                    <td colspan="8">No Employe Found</td>
                                </tr>
                                <?php
                                }
                            }  
                            else{
                                ?>
                                <tr>
                                    <td colspan="8">Search Using employe id</td>
                                </tr>
                                <?php
                            }
                        ?>  
                    </table> 
                    </div>
                        
                    <div style="float:right">
                        <form  action="addlocation.php"  method="post">
                            <br><br><input type="text" name="loc" placeholder="Enter New Location"><br><br>
                            <input type="submit" name="add" value="Add" class="button3" href="addlocation.php?">
                        </form>
                    </div>
                    <a href='viewlocations.php' class='button7'>viewlocations</a>
                  </div>
                </div>
    </div>
    <div class="charts2">
                <div class="chart2">
                <h2>UKMPL Shift Details</h2>
                    <table class="table1" border="1" cellspacing="0" cellpadding="0">  
                        <tr class="heading">  
                            <th> S.No </th>  
                            <th> E.Code </th>  
                            <th> Name </th>  
                            <th> Shift </th>  
                            <th> Hrs </th>  
                            <th> Location </th>  
                            <th> Shooting/Event/Others </th>  
                            <th> Security Service </th> 
                            <th> Modified Date </th> 
                        </tr>  
                        <?php 
                        $con  = mysqli_connect('localhost','root','','employe');
                        $query = "select * from emp_umpl";  
                        $run = mysqli_query($con,$query);
                        $i=1;  
                            if ($num = mysqli_num_rows($run)>0) { 
                                    while ($result = mysqli_fetch_assoc($run)) {  
                                        echo "  
                                            <tr class='data'>  
                                                <td>".$i++."</td> 
                                                <td>".$result['id']."</td>
                                                <td>".$result['name']."</td>
                                                <td>".$result['shift']."</td>
                                                <td>".$result['hour']."</td>
                                                <td>".$result['location']."</td>
                                                <td>".$result['shoot']."</td>
                                                <td>".$result['service']."</td>
                                                <td>".$result['dates']."</td>
                                                <td><a href='updateemploye.php?id=".$result['id']."' class='button''>Update</a></td>
                                                <td><a href='delete.php?id=".$result['id']."' class='button4'>Delete</a></td>  
                                            </tr>  
                                        ";  
                                    }  
                            }  
                        ?>  
                    </table> 
                </div>
            </div>
    </body>

</html>