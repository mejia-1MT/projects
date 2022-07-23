<?php
  require_once('../../connection.php');
  $RoomID = $_GET['GetID'];
  $query = "SELECT * FROM room WHERE RoomID = '".$RoomID."'";
  $result = mysqli_query($conn, $query);

  while ($row = $result -> fetch_assoc()) {
          
      $RoomID = $row['RoomID'];
      $RoomType = $row['RoomType'];
      $RoomClass = $row['RoomClass'];
      $MaxOccupants = $row['MaxOccupants'];
      $RoomPrice = $row['RoomPrice'];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Document</title>
</head>
<body>
<div class="overlay" id="form">
        <div class="wrapper">
            <h4>Update Form</h4>
            <a href="../view.php" class="close">&times;</a>

            <div class="content">

                <form method="post" action="update.php?ID=<?php echo $RoomID?>">
                    
            <div class="box">
                <label for="RoomID">RoomID</label>
                <span><?php echo $RoomID?></span>
            </div>

            <div class="box">
                <label for="RoomType">Room Type</label>
                <input type="text" name ="RoomType" value="<?php echo $RoomType?>">  
            </div>

            <div class="box">
                <label for="RommClass">Room Class</label>
                <input type="textarea" name="RoomClass" value="<?php echo $RoomClass?>">
            </div>

            <div class="box">
                <label for="MaxOccupants">Max Occupants</label>
                <input type="number" name="MaxOccupants" min=1 max=10 value="<?php echo $MaxOccupants?>">
            </div>

            <div class="box">
                <label for="RoomPrice">Room Price</label>
                <input type="number" name="RoomPrice" value="<?php echo $RoomPrice?>">
            </div>

        
                <input type="submit" name="Update2"  value="Update">
            </form>
            
        </div>
        </div>
    </div>
</body>
</html>