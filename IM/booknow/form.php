<?php 
    require_once('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
<div class="overlay" >
    <div class="wrapper">
            <h4>Booking Form</h4>
            <a href="../view/view.php" class="close">&times;</a>
        <div class="content">
            
            <form method="post" action="processes/insert.php">

             
            <div class="box">
                <label for="GuestName">Guest Name</label>
                <input type="text" name ="GuestName" placeholder="Place your name here"autocomplete="off">  
            </div>


            <div class="box">
                <label for="Age">Age</label>
                <input type="number" name="Age" id="Age" min="18" max="99" placeholder="Enter your age">
            </div>

            <div class="box">
                <label for="ContactNumber">ContactNumber</label>
                <input type="number" name="ContactNumber" id="ContactNumber" pattern=".{,11,}" placeholder="Enter contact info">
            </div>

            <div class="box">
                <label for="ArrivalDate">Arrival Date</label>
                <input type="date" name="ArrivalDate" id="ArrivalDate">
            </div>

            <div class="box">
                <label for="DepartureDate">Departure Date</label>
                <input type="date" name="DepartureDate" id="DepartureDate">
            </div>
       
            <div class="box">
                <input name ="BookingDate" value = '<?php echo date('Y-d-m');?>' readonly id="BookingDate"/>
                <label for="BookingDate">BookingDate</label>
            </div>

            <div class="box">
            <label for="RoomID">Rooms</label>
                <select name="RoomID" id="RoomID">
                <?php
            
            if($_GET['RoomNum']== '1'){
                $RoomType = $_GET['RT'];
                $sql = "SELECT RoomID
                FROM room
                WHERE RoomType = '".$RoomType."' AND NOT EXISTS 
                    (SELECT * 
                    FROM booking_details
                    WHERE room.RoomID = booking_details.RoomID);";}
            else if ($_GET['RoomNum']== '2'){
                $RoomType = $_GET['RT'];
                $sql = "SELECT RoomID
                FROM room
                WHERE RoomType = '".$RoomType."' AND NOT EXISTS 
                    (SELECT * 
                    FROM booking_details
                    WHERE room.RoomID = booking_details.RoomID);";}
            else if ($_GET['RoomNum']== '3'){
                $RoomType = $_GET['RT'];
                $sql = "SELECT RoomID
                FROM room
                WHERE RoomType = '".$RoomType."' AND NOT EXISTS 
                    (SELECT * 
                    FROM booking_details
                    WHERE room.RoomID = booking_details.RoomID);";}
            else if ($_GET['RoomNum']== '4'){
                $RoomType = $_GET['RT'];
                $sql = "SELECT RoomID
                FROM room
                WHERE RoomType = '".$RoomType."' AND NOT EXISTS 
                    (SELECT * 
                    FROM booking_details
                    WHERE room.RoomID = booking_details.RoomID);";}
            else if ($_GET['RoomNum']== '5'){
                $RoomType = $_GET['RT'];
                $sql = "SELECT RoomID
                FROM room
                WHERE RoomType = '".$RoomType."' AND NOT EXISTS 
                    (SELECT * 
                    FROM booking_details
                    WHERE room.RoomID = booking_details.RoomID);";}
            else if ($_GET['RoomNum']== '6'){
                $RoomType = $_GET['RT'];
                $sql = "SELECT RoomID
                FROM room
                WHERE RoomType = '".$RoomType."' AND NOT EXISTS 
                    (SELECT * 
                    FROM booking_details
                    WHERE room.RoomID = booking_details.RoomID);";}
            else if ($_GET['RoomNum']== '7'){
                $RoomType = $_GET['RT'];
                $sql = "SELECT RoomID
                FROM room
                WHERE RoomType = '".$RoomType."' AND NOT EXISTS 
                    (SELECT * 
                    FROM booking_details
                    WHERE room.RoomID = booking_details.RoomID);";}
            else {
                $RoomType = $_GET['RT'];
                $sql = "SELECT RoomID
                FROM room
                WHERE RoomType = '".$RoomType."' AND NOT EXISTS 
                    (SELECT * 
                    FROM booking_details
                    WHERE room.RoomID = booking_details.RoomID);";}
           

            $result = $conn -> query($sql);
            
           
              while ($row = $result -> fetch_assoc()) {
                $RoomID = $row["RoomID"];
    
    
      ?>

          <option><?php echo $RoomID;?></option>

                <?php
                }

                ?>
                </select>
            </div>

            <input type="submit" name="Book"  value="Book">
              
  
            </form>
            
        </div>
    </div>
</div>
</body>
</html>