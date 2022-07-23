<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="style.css" rel="stylesheet">
    <title>El Paraiso Hotel</title>

</head>
<body>
    <div class="front-page">

        <nav>

            <span id="for-title">
                <a id="title" href="about-us.html"><img src="pics/6.png"></a>
            </span>

            <span id="for-navs">

            <?php 
            
            if(isset($_SESSION['username'])) {
                
                echo '<span id="for-navs-log"><a id="view" href="view/view.php">View</a>';
                echo '<a id="booknow" href="booknow/booknow.php">Book Now!</a></span>';
            }
            else {
                echo '<div class="movethissvg"><a id="login" href="login/login.html"><svg class="svg-icon" viewBox="0 0 20 20">
                <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
            </svg></a></div>';
            }
            ?>

                
            </span>

        </nav>

            <br><br>

        <div>
            <h1 class="greeting"><i>Welcome to <b>Paraiso</b></i></h1>
        </div>

        <p class="supporting">Heaven in Earth</p> 
     
        <div class="logo">
            <img src="pics/logo.png" alt="logo should be here">
        </div>

    </div>
    
    
 
</body>

</html>