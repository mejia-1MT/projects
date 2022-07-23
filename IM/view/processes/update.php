<?php 

    require_once("../../connection.php");

    if ($conn-> connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }

    try {
      if(isset($_POST['Update1'])){
        $GuestID = $_GET['ID'];
        $GuestName = $_POST['GuestName'];
        $Age = $_POST['Age'];
        $ContactNumber = $_POST['ContactNumber'];

        $query =" update guest 
        set GuestName = '".$GuestName."', Age='".$Age."',ContactNumber='".$ContactNumber."' where GuestID='$GuestID'";
        $result = mysqli_query($conn, $query);
      
        if($result){
          header('location:../view.php');
        }
      }
      else if(isset($_POST['Update2'])){
        $RoomID = $_GET['ID'];
        $RoomType = $_POST['RoomType'];
        $RoomClass = $_POST['RoomClass'];
        $MaxOccupants = $_POST['MaxOccupants'];
        $RoomPrice = $_POST['RoomPrice'];

        $query ="UPDATE room
        SET RoomType = '".$RoomType."', RoomClass='".$RoomClass."',MaxOccupants='".$MaxOccupants."',RoomPrice='".$RoomPrice."'  
        WHERE RoomID='$RoomID'";
        $result = mysqli_query($conn, $query);
      
        if($result){
          header('location:../view.php');
        }
      }
      else if(isset($_POST['Update3'])){
        $BookingID = $_GET['ID'];
        $GuestID = $_GET['ID2'];
        $BookingDate = $_POST['BookingDate'];

        $query ="UPDATE booking
        SET BookingDate = '".$BookingDate."'
        WHERE GuestID='".$GuestID."' AND BookingID='$BookingID'";
        $result = mysqli_query($conn, $query);
      
        if($result){
          header('location:../view.php');
        }
      }
      
        else if(isset($_POST['Update4'])){
        $BookingID = $_GET['ID'];
        $RoomID = $_GET['ID2'];
        $ArrivalDate = $_POST['ArrivalDate'];
        $DepartureDate = $_POST['DepartureDate'];
        $TotalAmount = $_POST['TotalAmount'];

        $query ="UPDATE booking_details
        SET ArrivalDate = '".$ArrivalDate."', DepartureDate='".$DepartureDate."' , TotalAmount='".$TotalAmount."' 
        WHERE RoomID='".$RoomID."' AND BookingID='$BookingID'";
        $result = mysqli_query($conn, $query);
      
        if($result){
          header('location:../view.php');}
        }
        else {
          header('location: ../view.php');
        }
      }
        catch (mysqli_sql_exception $e){
          var_dump($e);
          exit();
        }
        

?>