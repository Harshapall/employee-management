
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

.topbar {
    position: fixed;
    background-color: #fff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.08);
    width: 100%;
    padding: 0 20px;
    height: 60px;
    display: grid;
    grid-template-columns: 2fr 10fr 0.4fr 1fr;
    align-items: center;
    z-index: 1;
}

img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.logo h2 {
    color: #299B63;
}

.search {
    position: relative;
    width: 60%;
    justify-self: center;
}

.search input {
    width: 100%;
    min-width: 128px;
    height: 40px;
    padding: 0 40px;
    font-size: 16px;
    outline: none;
    border: none;
    border-radius: 10px;
    background: #f5f5f5;
}

.search i {
    position: absolute;
    right: 15px;
    top: 15px;
    cursor: pointer;
}

.fa-bell {
    justify-self: right;
}

.user {
    position: relative;
    width: 50px;
    height: 50px;
    justify-self: right;
}


/* sidebar */

.sidebar {
    position: fixed;
    top: 60px;
    width: 260px;
    height: calc(100% - 60px);
    background: #299B63;
    overflow-x: hidden;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    z-index: 2;
}

.sidebar ul {
    margin-top: 20px;
}

.sidebar ul li {
    width: 100%;
    list-style: none;
}

.sidebar ul li:hover {
    background: #fff;
}

.sidebar ul li:hover a {
    color: #299B63;
}

.sidebar ul li a {
    width: 100%;
    text-decoration: none;
    color: #fff;
    height: 60px;
    display: flex;
    align-items: center;
}

.sidebar ul li a i {
    min-width: 60px;
    font-size: 24px;
    text-align: center;
}


/* main */

.main {
    position: absolute;
    top: 60px;
    width: calc(100% - 260px);
    min-height: calc(100vh - 60px);
    left: 260px;
    background: #f5f5f5;
}

.cards {
    width: 100%;
    padding: 35px 20px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
}

.cards .card {
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
}

.number {
    font-size: 35px;
    font-weight: 500;
    color: #299B63;
}

.card-name {
    color: #888;
    font-weight: 600;
}

.icon-box i {
    font-size: 45px;
    color: #299b63;
}

.button{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 6px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  width: 100px;
  border-radius: 16px;
}

/* charts */

.charts {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 20px;
    width: 100%;
    padding: 20px;
    padding-top: 0;
}

.chart {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    width: 100%;
}
.Date{
    margin-left: 50px;
}
.Date2{
    margin-left:60%;
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

<div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>Dashboard</h2>
            </div>
            <div class="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <img src="img/user.png" alt="">
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="Ukmpl.php">
                        <i class="fas fa-th-large"></i>
                        <div>UKMPL</div>
                    </a>
                </li>

                <li>
                    <a href="Sairaptor.php">
                        <i class="fas fa-th-large"></i>
                        <div>SIVA SAI / RAPTOR</div>
                    </a>
                </li>
                <li>
                    <a href="view_ukmpl.php">
                        <i class="fas fa-th-large"></i>
                        <div>UKMPL REPORT</div>
                    </a>
                </li>
                <li>
                    <a href="view_sairap.php">
                        <i class="fas fa-th-large"></i>
                        <div>SIVA SAI / RAPTOR REPORT</div>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fas fa-th-large"></i>
                        <div>LOGOUT</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="Date">
                <h3>SAI RAPTOR</h3>
                    <input type="date" name="date" placeholder="Enter Date" required>
                    <br></br>
                    <input type="submit" name="submit" value="search" class="button">
               </div>
               <div class="Date2">
                <h3>UKMPL</h3>
                    <input type="date" name="date2" placeholder="Enter Date" required>
                    <br></br>
                    <input type="submit" name="save" value="search" class="button">
               </div>
               <br></br>
               <br></br>
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift A1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">42</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift A2 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">68</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift B1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-content">
                        <div class="number">4500</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift BR Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift C1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">42</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift D1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">68</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift D6 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-content">
                        <div class="number">4500</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift GG Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">4500</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift N3 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
                

               <!--for ukmpl-->
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift A1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">42</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift A2 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">68</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift B1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-content">
                        <div class="number">4500</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift BR Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift C1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">42</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift D1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">68</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift D6 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-content">
                        <div class="number">4500</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift GG Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">4500</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift N3 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">42</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift D1 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">68</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift D6 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-content">
                        <div class="number">4500</div>
                        <h4>UKMPL</h4>
                        <div class="card-name">Shift GG Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">4500</div>
                        <h4>SAI / RAPTOR</h4>
                        <div class="card-name">Shift N3 Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

</body>
</html>





