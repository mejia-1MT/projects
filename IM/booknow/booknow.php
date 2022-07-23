<?php
    require_once("../connection.php");

    $query = "SELECT * FROM room";
    $result = mysqli_query($conn, $query);
  
    while ($row = $result -> fetch_assoc()) {
            
        $RoomID = $row['RoomID'];
        $RoomType = $row['RoomType'];
        $RoomClass = $row['RoomClass'];
        $MaxOccupants = $row['MaxOccupants'];
        $RoomPrice = $row['RoomPrice'];
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='booknow.css'>
    <title>Room Selection</title>

</head>
<body>
    <div class="text">
        <span class="logo">
            <a href='../index.php'><img src="../pics/logo.png"></a>
        </span>
        <span class="select">
            <span>Select a room</span>
        </span>
    </div>
    <div class="rooms">
        
            <div class="rb1">
                <img id= "r1" src="../pics/standard 1b.jpg">
                <div class="d1">
                <div class="c1">The Standard Single Bed in El Paraiso is the most basic and reasonably priced option. It comfortably sleeps one to two people and features a single bed, an en-suite bathroom with a hot and cold shower, and an office table, giving the space a warm and modern feel. 
                    <p>Room Class: Single bed </p>
                    <p>Max Occupants: 2 </p>
                    <p>Price: ₱1,000</p>
                <button class ="b1"><a href="form.php?RT=Standard 1B&RoomNum=1">Select</a></button></div>
                </div>
                    
                <div class="t1">
                    <div>Standard 1B</div>
                </div>
            </div>
    

        
            <div class="rb2">
                <img id= "r2" src="../pics/standard 2b.jpg">
               
                    <div class="c2">If you want a room that is spacious and comfortably fits two to three people, the Standard Double Bed in El Paraiso is a good option. It features a double bed, an en-suite bathroom with a hot and cold shower, and a small sofa set, which gives the room a calming and minimalist feel. 
                        <p>Room Class: Double bed </p>
                        <p>Max Occupants: 4 </p>
                        <p>Price: ₱3,000</p>       
                    <button class ="b2"><a href="form.php?RT=Standard 2B&RoomNum=2">Select</a></button>
                    </div>

                 <div class="t2">    
                    <span>Standard 2B</span>
                </div>
            </div>
            
           
    

        
            <div class="rb3">
                <img id= "r3" src="../pics/Deluxe.jpg">
                
                <div class="c3">The Deluxe 1BR suite at El Paraiso offers modern comforts. It has a queen-size bed that can accommodate up to three people, an en suite bathroom with a hot and cold shower, an office desk, and a small sala set, all of which contribute to the room's calm and basic ambiance.
                    <p>Room Class: 1 bedroom  </p>
                    <p>Max Occupants: 2 </p>
                    <p>Price: ₱4,000</p> 
                <button class ="b3"><a href="form.php?RT=Deluxe 1BR&RoomNum=3">Select</a></button>
                </div>

                <div class="t3">
                    <span>Deluxe 1B</span>
                </div> 
        
            </div>

            <div class="rb4">
                <img id= "r4" src="../pics/Deluxe 2b.jpg">
                    
            
                <div class="c4">Looking for a four to six-person shared bedroom? The Deluxe 2BR suite at El Paraiso is a good choice. It has a double queen-size bed, an en-suite bathroom with a hot and cold shower, an office desk, a veranda with a view of the beach, a small sala set, and luxury amenities.
                    <p>Room Class: 2 bedrooms </p>
                    <p>Max Occupants: 4 </p>
                    <p>Price: ₱6,000</p>
                <button class ="b4"><a href="form.php?RT=Deluxe 2BR&RoomNum=4">Select</a></button> 
                </div>
                
                <div class="t4">
                    <span>Deluxe 2B</span>
                </div>
            </div>
     
               
 
            <div class="rb5">
                <img id= "r5" src="../pics/junior presidential 1b.jpg">
                
                <div class="c5">El Paraisos’s Junior Suite is well-placed and offers a suite for entertaining. With a queen bed, a writing desk, a two-seat sofa and coffee table, and a large toilet and bath. Guests can make use of a phone with extensions for the desk and bathroom as well as cable television and coffee/tea making facilities in the hotel room. 
                    <p>Room Class: 1 bed room and a lounging area </p>
                    <p>Max Occupants: 3 </p>
                    <p>Price: <₱6,00</p>
                <button class ="b5"><a href="form.php?RT=Junior Suite 1BR&RoomNum=5">Select</a></button>
                </div>
            
                <div class="t5">
                    <span>Junior Presidential Suite 1B</span>
                </div>
            </div>

        <div class="rb6">
            <img id= "r6" src="../pics/junior presidential 2b..png">
            
            <div class="c6">Our Junior Suite 2BR provides a really memorable experience for you and your loved ones. A two king-size bed with Sealy mattress, a bathroom with rain shower, designer amenities, and a mini bar with the finest options complete the living area. In order to accommodate a third person, there is an additional daybed that may be used for relaxing.
                <p>Room Class: 2 bed room and a lounging area </p>
                <p>Max Occupants: 6 </p>
                <p>Price: ₱8,000</p>
            <button class ="b6"><a href="form.php?RT=Junior Suite 2BR&RoomNum=6">Select</a></button>
            </div>
            
            <div class="t6">
                <span>Junior Presidential Suite 2B</span>
            </div>
        </div>
    
        <div class="rb7">
            <img id= "r7" src="../pics/presidential.png">
            <div class="d1">
            <div class="c7">This Suite offers a bedroom with one king size bed and equipped kitchenette for guests who plan to stay for a longer period of time. All of the rooms in the suite are completely equipped, including kitchenettes, living rooms, dining rooms, and outside patios. This 420-square-meter bedroom suite includes a large living and dining space and a private bar. 
                <p>Room Class: 1 bed room, has a lounging area and kitchen area </p>
                <p>Max Occupants: 4 </p>
                <p>Price: ₱10,000</p>
            <button class ="b7"><a href="form.php?RT=Presidential Suite 1BR&RoomNum=7">Select</a></button></div>
            </div>
                
            <div class="t7">
                <span>Presidential Suite 1B</span>
            </div>
        </div>

        <div class="rb8">
            <img id= "r8" src="../pics/junior presidential 2b..png">
            
            <div class="c8">This luxurious, which can accommodate a two king or a queen bed, also has a view of the landscaped gardens and pool. There is a mini-fridge, digital safe, and a seating space. With its comfortable dining and living space and spotless kitchenette, this bedroom suite is created with the modern traveler in mind. You can take a moment to see the mesmerizing waves of the beach.
                <p>Room Class: 2 bed rooms, has a lounging area and kitchen area </p>
                <p>Max Occupants: 7 </p>
                <p>Price: ₱11,000</p>
            <button class ="b8"><a href="form.php?RT=Presidential Suite 2BR&RoomNum=8">Select</a></button>
        </div>
            
            <div class="t8">
                <span>Presidential Suite 2B</span>
            </div>
        </div>
    </div>
</body>
</html>