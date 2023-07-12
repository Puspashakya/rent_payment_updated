<?php
include "includes/functions.php"; 
  session_start();
  //$_SESSION["user_name"] = "user_name";
  if(!isset($_SESSION["user_name"])){
  header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
      background-image: url("images/1.jpg");
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      }
      #box{
        background-color: whitesmoke;
        border: 5px solid;
        width: 750px;
        height: 750px;
        font-size: 22px;
        margin-top: 15px;
        padding: 50px;
        
        margin-left: 450px;

        
      }
      div.enter_form{
        border-radius: 10px;
        background-color: aquamarine;
        width: 100%;
        border-radius: 10px;
         
      }
      form#enter_form{
        font-family: sans-serif;
        font-size: 18px;
        font-style: italic;
      }
      input#name{
        width: 300px;
        border: 1px solid #ddd;
        border-radius: 3px;
        outline: 0;
        padding: 7px;
        
      }
      .input-box{
        border-radius: 20px;
        padding: 10px;
        margin: 10px 0;
        width: 100%;
        border: 1px solid #999;
        outline: none;
      }

    </style>
    
</head>
<body>
<div id="box">
<div>
    <h2> Please enter the following requirement </h2>
        <form id="enter_form" action="total.php" method="POST">
            Month: <br>
            Name: <input type = "text" name="user_name" class="input-box"> <br><br>
            room_id1: <input type = "number" name="room_id" class="input-box"> <br><br>

            
            
            
            family member: <input type = "number" name="family_member" class="input-box"> <br><br>
            eletricity Unit: <input type = "number" name="electricity" class="input-box"> <br><br>

            <input type ="submit" class="input-box">
            <input type ="reset" class="input-box">
            
        </form>   
<?php
      
  ?>
</div>
</div>
        
        
        
    



 

</body>
</html>


