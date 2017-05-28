<?php session_start();

 ?>
 <html>
<head>
    <title>Make Money!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">
        <div class="top">
            <h3>Your Gold: <?php 
            
            if($_POST['building'] == 'farm') {
                $_SESSION['gold'] = rand(10, 20);
            }
            else if($_POST['building'] == 'cave') {
                $_SESSION['gold'] = rand(5, 10);
            }
            else if($_POST['building'] == 'house') {
                $_SESSION['gold'] = rand(2, 5);
            }
            else if($_POST['building'] == 'casino') {
                $_SESSION['gold'] = rand(-50, 50);
            }
            
            if(!isset($_SESSION['new_val'])) {
                $_SESSION['new_val'] = array();
            }
            array_push($_SESSION['new_val'],$_SESSION['gold']);
           
            echo array_sum($_SESSION['new_val']);
            
            ?></h3>
            
        </div>
            <div class="main">
            <div class="building">
                <h3>Farm</h3>
                <p>(earns 10-20 golds)</p>
                <form action="send.php" method="post">
                    <input type="hidden" name="building" value="farm">
                    <input class="button" type="submit" value="Find Gold!">
                </form>
            </div>
            <div class="building">
                <h3>Cave</h3>
                <p>(earns 5-10 golds)</p>
                <form action="send.php" method="post">
                    <input type="hidden" name="building" value="cave">
                    <input class="button" type="submit" value="Find Gold!">
                </form>
            </div>
            <div class="building">
                <h3>House</h3>
                <p>(earns 2-5 golds)</p>
                <form action="send.php" method="post">
                    <input type="hidden" name="building" value="house">
                    <input class="button" type="submit" value="Find Gold!">
                </form>
            </div>
            <div class="building">
                <h3>Casino</h3>
                <p>(earns/takes 0-50 golds)</p>
                <form action="send.php" method="post">
                    <input type="hidden" name="building" value="casino">
                    <input class="button" type="submit" value="Find Gold!">
                </form>
            </div>
        </div>
        <div id="activities">Activities:</div>
        <div id="messages">
            <?php
            if(!isset($_SESSION['newbuild'])) {
                $_SESSION['newbuild'] = array();
            }
            array_push($_SESSION['newbuild'],$_POST['building']);
            
            $timestamp = time() + 3600 * 24;
            date_default_timezone_set('Europe/Vilnius');
            setcookie("timestamp", date('F dS Y h:i:s a'));
            
            if(!isset($_COOKIE['timestamp'])) {
                $_SESSION['time'] = array();
            }
            array_push($_SESSION['time'], $_COOKIE['timestamp']);
            
            for($i = 0; $i < count($_SESSION['newbuild']); $i++) {
                if ($_SESSION['new_val'][$i] < 0) {
                echo "<p style='color: red;'>You entered a ". $_SESSION['newbuild'][$i]." and lost ".$_SESSION['new_val'][$i]." golds... (". $_SESSION['time'][$i].")";
                }
                else {
                    echo "<p style='color: SeaGreen;'>You entered a ". $_SESSION['newbuild'][$i]. " and found ".$_SESSION['new_val'][$i]." golds. (".$_SESSION['time'][$i].")";
                }
            }

            ?>
        </div>
    </div>
</body>
</html>