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
<<<<<<< HEAD
        ul {
            
            list-style-type: none;
        
            
        }
=======
        ul {list-style-type: none;}
>>>>>>> dc4b370... Modified get image
    </style>
    
    <body>
        <div id="mixi-contents">
            <p>Mixi Feed</p>
            <button id="showmixi-feed">Show Feed</button>
            <ul id = "mixiList">
            <li><?php h($myFeeds->mixiFeed()) ?></li>
            </ul>
        </div>
<<<<<<< HEAD
=======
        <div class="line-contents">
            <p>Line Feed</p>
            <button id="showline-feed">Show Feed</button>
            <ul id= "lineList">
            <li><?php h($myFeeds->lineFeed()) ?></li>
            </ul>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            var flag = 0;
                if(flag === 0) {
                    $('#mixiList').hide();    
                    $('#lineList').hide();    
                };
                
                $("#showmixi-feed").on('click', function () {
                    $('#mixiList').toggle();
                });
                
                if(flag === 0) {

                };
                
                $("#showline-feed").on('click', function () {
                    $('#lineList').toggle();
                    
                });
               
        </script>
>>>>>>> dc4b370... Modified get image
    </body>
</html>