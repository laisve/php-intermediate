<?php if(empty($_POST)) header("Location: index.php"); ?>
<html>
<head>
    <title>Amazon Alpha</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">
        <p>Here's what you submitted:</p>
        <p>Book title: <?php echo $_POST['book_title']; ?></p>
        <p>Author(s): <?php echo $_POST['author']; ?></p>
        <p>Stock Available: <?php echo $_POST['stock_available']; ?></p>
        <p>Year: <?php echo $_POST['year']; ?></p>
    </div>
</body>
</html>