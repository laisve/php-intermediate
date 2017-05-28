<?php session_start();
if(!isset($_SESSION['random']))
    $_SESSION['random'] = rand(1, 100);
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Great number game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="content">
        <h1>Welcome to the Great Number Game!</h1>
        <h4>I am thinking of a number between 1 and 100</h4>
        <h4>Take a guess!</h4>
        <?php
        if($_POST['guess'] == $_SESSION['random']) { ?>
            <div class='answer correct'>
                <?php echo $_POST['guess']; ?> was the number!
            </div>
            <form action="index.php" method="post">
                <input type="submit" class="button" name="play_again" value="Play again!">
            </form>
            <?php session_unset(); 
            
        }
        else if($_POST['guess'] < $_SESSION['random']) { ?>
            <div class='answer wrong'>
                Too low!
            </div>
            <form action="send.php" method="post">
                <input type="number" class="num" name="guess" min="1" max="100"><br>
                <input class="button" type="submit" value="Submit">
            </form>
        <?php }
        else { ?>
            <div class='answer wrong'>
                Too high!
            </div>
            <form action="send.php" method="post">
                <input type="number" class="num" name="guess" min="1" max="100"><br>
                <input class="button" type="submit" value="Submit">
            </form>
        <?php }
        ?>
    </div>
</body>
</html>