<?php
  require_once('../../connection.php');
  $BookingID = $_GET['GetID'];
  $GuestID = $_GET['GetID2'];
  $query = "SELECT * FROM booking WHERE GuestID ='".$GuestID."' AND BookingID = '".$BookingID."'" ;
  $result = mysqli_query($conn, $query);

  while ($row = $result -> fetch_assoc()) {
      
      $BookingDate = $row['BookingDate'];
  }
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

                <form method="post" action="update.php?ID=<?php echo $BookingID?>&ID2=<?php echo $GuestID?>" >
                    
            <div class="box">
                <label for="GuestID">Guest ID</label>
                <span><?php echo $GuestID?></span>
            </div>

            <div class="box">
                <label for="BookingDate">Booking Date</label>
                <input type="date" name ="BookingDate" value="<?php echo $BookingDate?>">  
            </div>

            <div class="box">
            <label for="BookingID">Booking ID</label>
                <span><?php echo $BookingID?></span>
            </div>
        
                <input type="submit" name="Update3"  value="Update">
            </form>
            
        </div>
        </div>
    </div>
</body>
</html>