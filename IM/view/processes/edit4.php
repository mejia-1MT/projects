<?php
    require_once('../../connection.php');
    $BookingID = $_GET['GetID'];
    $RoomID = $_GET['GetID2'];
    $query = "SELECT * FROM booking_details WHERE RoomID= '".$RoomID."' AND BookingID = '".$BookingID."'";
    $result = mysqli_query($conn, $query);

    while ($row = $result -> fetch_assoc()) {
            
        $ArrivalDate = $row['ArrivalDate'];
        $DepartureDate = $row['DepartureDate'];
        $TotalAmount = $row['TotalAmount'];
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

                <form method="post" action="update.php?ID=<?php echo $BookingID?>&ID2=<?php echo $RoomID?>">
                    
            <div class="box">
                <label>BookingID</label>
                <span><?php echo $BookingID?></span>
            </div>

            <div class="box">
                <label>Room ID</label>
                <span><?php echo $RoomID?></span>
            </div>

            <div class="box">
                <label for="ArrivalDate">Arrival Date</label>
                <input type="date" name ="ArrivalDate" value="<?php echo $ArrivalDate?>">  
            </div>

            <div class="box">
                <label for="DepartureDate">Departure Date</label>
                <input type="date" name="DepartureDate" value="<?php echo $DepartureDate?>">
            </div>

            <div class="box">
                <label for="TotalAmount">Total Amount</label>
                <input type="number" name="TotalAmount" value="<?php echo $TotalAmount?>">
            </div>

                <input type="submit" name="Update4"  value="Update">
            </form>
            
        </div>
        </div>
    </div>
</body>
</html>