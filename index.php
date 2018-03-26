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
    
    <style>
        ul {
            
            list-style-type: none;
        
            
        }
    </style>
    
    <body>
        <div id="mixi-contents">
            <p>Mixi Feed</p>
            <?php h($myFeeds->mixiFeed()) ?>
        </div>
    </body>
</html>