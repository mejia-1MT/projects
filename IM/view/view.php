<?php

  require_once("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>View</title>
</head>
<body>
    <div class="administrator">
            <img src="../pics/59dd2de965dc059ca01c5c1e4b13b637.svg" class = svg>

            <div class="greet">Administrator</div>

            <div class="navs">
        <input type ="radio" name="same" class="button"id="guest" checked>
        <label for="guest" class="label">Guest</label>
        <div class="content"><div class="guest">Guest</div>

            <br>
            <div class="add"><a href="../booknow/booknow.php">Add</a></div>
            <div class="table">
            <table>
                <tr>
                    <th>Guest ID</th>
                    <th>Guest Name</th>
                    <th>Age</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
                <?php
            
        $sql = "SELECT GuestID, GuestName, Age, ContactNumber FROM guest";
        $result = $conn -> query($sql);
        
        
       
          while ($row = $result -> fetch_assoc()) {
            $GuestID = $row['GuestID'];
            $GuestName = $row['GuestName'];
            $Age = $row['Age'];
            $ContactNumber = $row['ContactNumber'];


  ?>
                <tr>
                    <td><?php echo $GuestID?></td>
                    <td><?php echo $GuestName?></td>
                    <td><?php echo $Age?></td>
                    <td><?php echo $ContactNumber?></td>
                    <td> <a class='edit' href='processes/edit1.php?GetID=<?php echo $GuestID?>'>Edit</a> <a class='delete' href='processes/del.php?GetID=<?php echo $GuestID?>&DelNum=1'>Delete</a> </td>
                </tr>
                <?php
                }
              ?>
        </table>
  </div>
  

        </div>

        
        
        <input type ="radio" name="same" class="button"  id="room" >
        <label for="room" class="label">Room</label>
        <div class="content"><div class="guest">Room</div>

        <div class="add"><a href="../booknow/booknow.php">Add</a></div>

        <div class="table">
            <table class="tabler">
                <tr>
                    <th>Room ID</th>
                    <th>Room Type</th>
                    <th>Room Class</th>
                    <th>Max Occupants</th>
                    <th>RoomPrice</th>
                    <th>Action</th>
                </tr>

        <?php       
        $sql = "SELECT RoomID, RoomType, RoomClass, MaxOccupants, RoomPrice FROM room";
        $result = $conn -> query($sql);

        while ($row = $result -> fetch_assoc()) {
            
          $RoomID = $row['RoomID'];
          $RoomType = $row['RoomType'];
          $RoomClass = $row['RoomClass'];
          $MaxOccupants = $row['MaxOccupants'];
          $RoomPrice = $row['RoomPrice'];

?>
              <tr>
                  <td><?php echo $RoomID?></td>
                  <td><?php echo $RoomType?></td>
                  <td><?php echo $RoomClass?></td>
                  <td><?php echo $MaxOccupants?></td>
                  <td><?php echo $RoomPrice?></td>
                  <td> <a class='edit' href='processes/edit2.php?GetID=<?php echo $RoomID?>'>Edit</a> <a class='delete' href='processes/del.php?GetID=<?php echo $GuestID?>&DelNum=2'>Delete</a> </td>
              </tr>
              <?php
                }
              ?>
      </table>
</div>
        </div>

        <input type ="radio" name="same" class="button"  id="reservation" >
        <label for="reservation" class="label">Room Reservation</label>
        <div class="content"><div class="guest">Room Reservation</div>

        <div class="add"><a href="../booknow/booknow.php">Add</a></div>
        <div class="table">
        <table>
                <tr>
                    <th>Guest ID</th>
                    <th>Booking Date</th>
                    <th>Booking ID</th>
                    <th>Action</th>
                </tr>

        <?php 
        
        $sql = "SELECT BookingID, BookingDate, GuestID  FROM booking";
        $result = $conn -> query($sql);

        while ($row = $result -> fetch_assoc()) {
            
          $GuestID = $row['GuestID'];
          $BookingDate = $row['BookingDate'];
          $BookingID = $row['BookingID'];


       
        
?>
              <tr>  
                  <td><?php echo $GuestID?></td>
                  <td><?php echo $BookingDate?></td>
                  <td><?php echo $BookingID?></td>
                  <td> <a class='edit' href="processes/edit3.php?GetID=<?php echo $BookingID?>&GetID2=<?php echo $GuestID?>">Edit</a> <a class='delete' href='processes/del.php?GetID=<?php echo $BookingID?>&GetID2=<?php echo $GuestID?>&DelNum=3'>Delete</a> </td>
              </tr>
              <?php
                }
              ?>
      </table>
        </div>
      </div>

        <input type ="radio" name="same" class="button"  id="details" >
        <label for="details" class="label">Room Details</label>
        <div class="content"><div class="guest">Room Details</div>

        <div class="add"><a href="../booknow/booknow.php">Add</a></div>
        <div class="table">
        <table>
                <tr>
                    <th>Booking ID</th>
                    <th>Room ID</th>
                    <th>Arrival Date</th>
                    <th>Departure Date</th>
                    <th>Total Amount</th>
                    <th>Action</th>
                </tr>
                <?php 
        
        $sql = "SELECT BookingID, RoomID, ArrivalDate, DepartureDate, TotalAmount  FROM booking_details";
        $result = mysqli_query($conn,$sql);

        while ($row =  mysqli_fetch_assoc($result)) {
            
          $BookingID = $row['BookingID'];
          $RoomID = $row['RoomID'];
          $ArrivalDate = $row['ArrivalDate'];
          $DepartureDate = $row['DepartureDate'];
          $TotalAmount = $row['TotalAmount'];

         
?>
              <tr>
                  <td><?php echo $BookingID?></td>
                  <td><?php echo $RoomID?></td>
                  <td><?php echo $ArrivalDate?></td>
                  <td><?php echo $DepartureDate?></td>
                  <td><?php echo $TotalAmount?></td>
                  <td> <a class='edit' href="processes/edit4.php?GetID=<?php echo $BookingID?>&GetID2=<?php echo $RoomID?>">Edit</a> <a class='delete' href='processes/del.php?GetID=<?php echo $BookingID?>&GetID2=<?php echo $RoomID?>&DelNum=4'>Delete</a> </td>
              </tr>
              <?php
                }
              ?>
      </table>

        </div>

      </div>

        <a  class= 'logout' href="logout.php">Sign-out</a>
 
            </div>
            
            <a href="../index.php"><img src="../pics/logo.png" id="pic"></a>
            
    </div>
</body>
</html>