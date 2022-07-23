<?php 

    require_once("../../connection.php");

    if ($conn-> connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }

    try {
    
      if($_GET['DelNum']== '1'){
        $GuestID = $_GET['GetID'];


        $sql = "SELECT * FROM booking
        WHERE GuestID = '".$GuestID."'";
        $result = $conn -> query($sql);

        while ($row = $result -> fetch_assoc()) {

          $GuestID = $row['GuestID'];
          
          $BookingID = $row['BookingID'];

          $query =" DELETE FROM guest
          where  GuestID='$GuestID'";
          $results = mysqli_query($conn, $query);


          $query =" DELETE FROM booking_details
          where  BookingID = '$BookingID'";
          $results = mysqli_query($conn, $query);

          $query =" DELETE FROM booking
          where  BookingID = '$BookingID'";
          $results = mysqli_query($conn, $query);
           
        }
      
        if($result){
          header('location:../view.php');
        }
    
      }
      else if($_GET['DelNum']== '2'){
        $RoomID = $_GET['GetID'];
    
        $query =" DELETE FROM room
        where RoomID='$RoomID'";
        $result = mysqli_query($conn, $query);
      
        if($result){
          header('location:../view.php');
        }
      }
      else if($_GET['DelNum']== '3'){
        $BookingID = $_GET['GetID'];
        $GuestID = $_GET['GetID2'];

        $sql = "SELECT * FROM booking
        WHERE GuestID = '".$GuestID."'";
        $result = $conn -> query($sql);

        if($result)
    {
        echo $row = mysqli_num_rows($result);

            if($row != 1){
              $query =" DELETE FROM booking_details
              where  BookingID = '$BookingID'";
              $results = mysqli_query($conn, $query);

              $query =" DELETE FROM booking
              where  BookingID = '$BookingID'";
              $results = mysqli_query($conn, $query);
            }
            else {
              $query =" DELETE FROM guest
              where  GuestID='$GuestID'";
              $results = mysqli_query($conn, $query);
    
    
              $query =" DELETE FROM booking_details
              where  BookingID = '$BookingID'";
              $results = mysqli_query($conn, $query);
    
              $query =" DELETE FROM booking
              where  BookingID = '$BookingID'";
              $results = mysqli_query($conn, $query);
            }

        
        }
         if($result){
          header ('location: ../view.php');
         }
        
        }
      
        else if($_GET['DelNum']== '4'){
        echo $BookingID = $_GET['GetID'];
        $RoomID = $_GET['GetID2'];

        $sql = "SELECT * FROM booking
        WHERE BookingID = '".$BookingID."'";
        $result = $conn -> query($sql);
        
        while ($row = $result -> fetch_assoc()) {
          $GuestID = $row['GuestID'];
        }
       
        
        $sql = "SELECT * FROM booking
        WHERE GuestID = '".$GuestID."'";
        $result = $conn -> query($sql);

       

        if($result)
        {
          echo $row = mysqli_num_rows($result);

          if($row != 1){
            $query =" DELETE FROM booking_details
            where  BookingID = '$BookingID'";
            $results = mysqli_query($conn, $query);

            $query =" DELETE FROM booking
            where  BookingID = '$BookingID'";
            $results = mysqli_query($conn, $query);
          }
          else {
            $query =" DELETE FROM guest
            where  GuestID='$GuestID'";
            $results = mysqli_query($conn, $query);
  
  
            $query =" DELETE FROM booking_details
            where  BookingID = '$BookingID'";
            $results = mysqli_query($conn, $query);
  
            $query =" DELETE FROM booking
            where  BookingID = '$BookingID'";
            $results = mysqli_query($conn, $query);
          }

          if($result){
            header ('location: ../view.php');
          }
        
        }
      
        }
        else {
          echo 'mali ata';
        }
      }
        catch (mysqli_sql_exception $e){
          var_dump($e);
          exit();
        }
        

?>