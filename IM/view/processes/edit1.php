<?php
    require_once('../../connection.php');
    $GuestID = $_GET['GetID'];
    $query = "SELECT * FROM guest WHERE GuestID = '".$GuestID."'";
    $result = mysqli_query($conn, $query);

    while ($row = $result -> fetch_assoc()) {
            
        $GuestName = $row['GuestName'];
        $Age = $row['Age'];
        $ContactNumber = $row['ContactNumber'];
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

                <form method="post" action="update.php?ID=<?php echo $GuestID?>">
                    
            <div class="box">
                <label>Guest ID</label>
                <span><?php echo $GuestID?></span>
            </div>

            <div class="box">
                <label for="GuestName">Guest Name</label>
                <input type="text" name ="GuestName" value="<?php echo $GuestName?>">  
            </div>

            <div class="box">
                <label for="Age">Age</label>
                <input type="number" name="Age" id="Age" min="18" max="99" value="<?php echo $Age?>">
            </div>

            <div class="box">
                <label for="ContactNumber">ContactNumber</label>
                <input type="number" name="ContactNumber" id="ContactNumber" pattern="[0-9]" value="<?php echo $ContactNumber?>">
            </div>


        
                <input type="submit" name="Update1"  value="Update">
            </form>
            
        </div>
        </div>
    </div>
</body>
</html>