<?php
 //echo "welcome to the room page";
?>

<?php
    include "includes/functions.php";
    $data = get_room();
?>

<?php
    add_room();
    if (isset($_GET['add']))
    {
        ?>

        <h2> Add room </h2>
        <form action="room.php" metho="post">
            <label>room_id</label>
            <input type ="text" placeholder="Enter room Id" name="room_id"> <br>
            <label>floor</label>
            <input type ="text" placeholder="Enter floor" name="floor"> <br>
            <label>price</label>
            <input type ="text" placeholder="Enter room price " name="price"> <br>
            <button type = "submit" value="update" name="add_room">submit</button>
            <button type = "submit" value="cancel" name="cancel">cancel</button>
            
        </form>

        <?php 
    }
        ?>

<?php
    edit_room();
    if (isset($_GET['edit']))
    {
        ?>

        <h2> edit room </h2>
        <form action="room.php" metho="get">
            <label>room_id</label>
            <input type ="text" placeholder="Enter room Id" name="room_id"> <br>
            <label>floor</label>
            <input type ="text" placeholder="Enter floor" name="floor"> <br>
            <label>price</label>
            <input type ="text" placeholder="Enter room price " name="price"> <br>
            <button class= "button" type = "submit" value="update" name="edit_room">submit</button>
            <button type = "submit" value="cancel" name="cancel">cancel</button>
            
        </form>

        <?php 
    }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style3.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Room Details</title>
    <style>
        body{
            background-color: #F5F5F5;
        }
        
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
    <table style="width:99%;">
    <thead>
                <tr>
                    <th scope="col"> room_id</th>
                    <th scope="col"> floor</th>
                    <th scope="col"> price</th>
                   
                    <th> <button type ="button"><a href="room.php?add=1"> add </a></button></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $data = get_room();
                delete_room();
                edit_room();               
                $num = sizeof($data);
                if (isset($data)) {
                for($i=0; $i<$num; $i++)
                {
                ?>
                    
                    <tr>
                        <th scope="col"> <?php echo $data[$i]['room_id'] ?> </th>
                        <th scope="col"> <?php echo $data[$i]['floor'] ?> </th>
                        <th scope="col"> <?php echo $data[$i]['price'] ?> </th>
                        
                        <td> <button type="button"><a href="room.php?edit=<?php echo $data[$i]['room_id'] ?>">edit</a></button></td>                      
                        <td> <button type="button"><a href="room.php?delete=<?php echo $data[$i]['room_id'] ?>">delete</a></button></td>                      
                        
                    </tr>
                    
               <?php 
                
                }
            }
        
               ?>
            </tbody>
    </table>
  </section>
  

   
    
    
</body>
</html>