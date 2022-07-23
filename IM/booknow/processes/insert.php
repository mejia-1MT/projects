<?php 

    require_once("../../connection.php");


    try {
        if(isset($_POST['Book'])){
     $RoomID = $_POST['RoomID'];
     '<br>';
    $sql = "SELECT * FROM room 
    WHERE RoomID = '".$RoomID."'";
    $result = $conn -> query($sql);
    while ($row = $result -> fetch_assoc()) {
            
         $RoomPrice = $row['RoomPrice'];
    }
     
    $GuestName =  $_POST['GuestName'];
    
    
    $Age = $_POST['Age'];
    $ContactNumber = $_POST['ContactNumber'];
    $ArrivalDate = $_POST['ArrivalDate'];
    $DepartureDate = $_POST['DepartureDate'];
    $secs = strtotime($DepartureDate) - strtotime($ArrivalDate);// == <seconds between the two times>
    $days = $secs / 86400;
    $TotalAmount = $days * $RoomPrice;
    
    
    
    $query =" INSERT INTO `booking_details` (`RoomID`, `ArrivalDate`, `DepartureDate`, `TotalAmount`) 
    VALUES('".$RoomID."','".$ArrivalDate."','".$DepartureDate."','".$TotalAmount."')";
    $result = mysqli_query($conn, $query);


    $sql = "SELECT * FROM guest 
    WHERE GuestName = '".$GuestName."'";
    $result = $conn -> query($sql);

    if($result)
    {
        $row = mysqli_num_rows($result);

            if($row != 1){
                $query =" INSERT INTO `guest`( `GuestName`, `Age`, `ContactNumber`) 
                VALUES ('".$GuestName."','".$Age."','$ContactNumber')";
                $result = mysqli_query($conn, $query);
            }
         
        
    }
    $sql = "SELECT * FROM guest 
    WHERE GuestName = '".$GuestName."'";
    $result = $conn -> query($sql);
   while ($row = $result -> fetch_assoc()) {
        
        $GuestID = $row['GuestID'];
        
    } 
    $query =" INSERT INTO `booking`( `BookingDate`, `GuestID`) 
    VALUES ('".date('Y-m-d')."','$GuestID')";
    $result = mysqli_query($conn, $query);


    if($result){
        header ('location: ../../view/view.php');
    }
}

   
}
    catch (mysqli_sql_exception $e){
        var_dump($e);
        exit();
      }
      


?>