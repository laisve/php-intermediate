<?php session_start();?>

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
        <form action="send.php" method="post">
            <input type="number" class="num" name="guess" min="1" max="100"><br>
            <input class="button" type="submit" value="Submit">
        </form>
    </div>
</body>
</html>