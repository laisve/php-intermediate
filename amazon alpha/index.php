<!DOCTYPE html>
<html>
<head>
    <title>Amazon Alpha</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">
        <form action="send.php" method="post">
            <div class="input">Book Title: <input type="text" name="book_title"></div>
            <div class="input">Author(s): <input type="text" name="author"></div>
            <div class="input">Stock Available: <input type="number" name="stock_available"></div>
            <div class="input">Year: <input type="number" name="year"></div>
            <div><input class="button" type="submit" value="Submit"></div>
        </form>
    </div>
</body>
</html>