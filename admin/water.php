
<?php
    include "includes/functions.php";
    $data = get_water();
?>
                
                <?php
    edit_water();
    if (isset($_GET['edit']))
    {
        ?>

        <h2> edit room </h2>
        <form action="water.php" metho="get">
            <label style="color: white;">price of water</label>
            <input type ="text" placeholder="Enter new price of water" name="water_amount"> <br>
            
            
            <button type = "submit" value="update" name="edit_water">submit</button>
            <button type = "submit" value="cancel" name="cancel">cancel</button>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
        </form>

        <?php 
    }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    

    <link rel="stylesheet" href="style3.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Details</title>

    
        <style>

            button {
                        background-color: #4CAF50;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                    }
                    h2{
                        text-align: center;
                    }

    </style>


</head>



<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">rent_system</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="room.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Room</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">extra</span>
          </a>
        </li>
        <li>
          <a href="electricity.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Electricity</span>
          </a>
        </li>
        <li>
          <a href="rent.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Rent</span>
          </a>
        </li>
        <li>
          <a href="water.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Water</span>
          </a>
        </li>
        <li>
          <a href="users.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
      
    
      
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="../images/tran.jpg" alt="">
        <span class="admin_name">Puspa Shakya</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>
    

    <h2> The amount of water is Rs. 
                <?php
                $data = get_water();
                if (isset($data)) {
                $num = sizeof($data);
                for($i=0; $i<$num; $i++)
                {
                ?>
                
                    
                
                        <?php echo $data[$i]['water_amount'] ?> 
                        
                        
                    
               <?php  
                }
            }
               ?>
                per family mebers </h2> <h2> <br><button type ="button"><a href="water.php?edit=1"> Update price of water </a></button>

        </h2>

  </section>
   



</body>
</html>