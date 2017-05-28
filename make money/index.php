<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <title>Make Money!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">
        <div class="top">
            <h3>Your Gold: 0</h3>
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
    </div>
</body>
</html>