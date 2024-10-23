<?php include 'database.php' ; ?>
<?php
// Create Select query
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shout it Shoutbox</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Shout it Shoutbox</h1>
        </header>
        <div id="shouts">
    <ul>
        <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
            <li class="shouts"><span><?php echo $row['time'] ?> - </span>
            <?php echo $row['user'] ?>: <?php echo $row['message'] ?> </li>
        <?php endwhile; ?>
    </ul>
        </div>
        <div class="input">
            <?php if(isset($_GET['error'])) : ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
            <?php endif; ?>   
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter you name"/>
                <input type="text" name="message" placeholder="Enter you message"/>
                <br>
                <input class="shout-btn" type="submit" name="submit" value="Shout It out">
            </form>
        </div>
    </div>
</body>
</html>