<?php 

require_once "./config.php";

$myFeeds = new myFeed();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="mixi-contents">
            <p>Mixi Feed</p>
            <?php h($myFeeds->mixiFeed()) ?>
        </div>
        <div class="line-contents">
            <p>Line Feed</p>
            <?php h($myFeeds->lineFeed()) ?>
        </div>
        
    </body>
</html>