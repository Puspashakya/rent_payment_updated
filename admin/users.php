

<?php
    include "includes/functions.php";
    $data = all_users();
    delete_users();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <link rel="stylesheet" href="style3.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenent Details</title>
    <style>
        
    .fixTableHead {
      overflow-y: auto;
      height: 600px;
    }
    .fixTableHead thead th {
      position: sticky;
      top: 0;
    }
    table {
      border-collapse: collapse;        
      width: 100%;
    }
    th,
    td {
      padding: 8px 15px;
      border: 2px solid #529432;
    }
    th {
      background: #ABDD93;
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


    <div class="fixTableHead">
        <table width="99%" border="1" cellpadding="5" cellspacing="5">
            <thead>
                <tr>
                    <th scope="col"> id</th>
                    <th scope="col"> name</th>
                    <th scope="col"> address</th>
                    <th scope="col"> phone</th>
                    <th scope="col">user mail</th>
                    <th scope="col">user nagrita</th>
                    <th scope="col">family member </th>
                    <th scope="col">Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = all_users();
                if (isset($data)) {
                $num = sizeof($data);
                for($i=0; $i<$num; $i++)
                {
                ?>
                
                    
                    <tr>
                        <td> <?php echo $data[$i]['user_id'] ?> </td>
                        <td> <?php echo $data[$i]['user_name'] ?> </td>
                        <td> <?php echo $data[$i]['user_address'] ?> </td>
                        <td> <?php echo $data[$i]['user_phone'] ?> </td>
                        <td> <?php echo $data[$i]['user_mail'] ?> </td>
                        <td class="picture1"> <?php echo '<img src="data:image;base64,'.base64_encode($data[$i]['user_nagrita']).'" alt="Image" style="width: 200px; height: 200px;" >';?> </td>
                        <td> <?php echo $data[$i]['family_member'] ?> </td>
                        <td> <button type="button"><a href="users.php?delete=<?php echo $data[$i]['user_id'] ?>">delete</a></button></td> 
                        
                    </tr>
                    
               <?php  
                }
            }
               ?>

            </tbody>
            
        </table>
    </div>
    
</body>
</html>