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
        float: left;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 0px 2px;
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

/* charts */

.charts {
display: grid;
grid-template-columns: 2fr 1fr;
grid-gap: 20px;
width: 122%;
padding: 20px;
padding-top: 0;
margin-left: 10px;
height: 600px;
}

.chart {
background-color: #fff;
padding: 20px;
border-radius: 10px;
box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
width: 122%;
margin-left: 10px;
height: 600px;
}

.chart h2 {
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
table{  
width: 75%;  
position: absolute;  
top: 30%;  
left: 50%;  
transform: translate(-50%,-50%); 

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
        <br>
        <br>
<h2 style="text-align:center" style="top:50px">======LOCATIONS======</h2>
<table class="table" border="1" cellspacing="0" cellpadding="0">  
                            <tr class="heading">  
                            <th> S.No </th>  
                            <th> Location Name </th>  
                            </tr>  
                        <?php 
    
                                
                                // connect to mysql
                                $connect = mysqli_connect("localhost", "root", "","employe");
                                
                                // mysql search query
                                $query = "SELECT * FROM `emp_loc`";
                                
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
                                                        <td>".$row['location']."</td>
                                                        <td><a href='delete_location.php?id=".$row['location']."' class='button4'>Delete</a></td>  
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
                        ?>  
                    </table> 
    </body>
</html>