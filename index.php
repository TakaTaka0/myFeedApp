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
            <button id="showmixi-feed">Show Feed</button>
            <ul id = "mixiList">
            <li><?php h($myFeeds->mixiFeed()) ?></li>
            </ul>
        </div>

        <div class="line-contents">
            <p>Line Feed</p>
            <button id="showline-feed">Show Feed</button>
            <ul id= "lineList">
            <li><?php h($myFeeds->lineFeed()) ?></li>
            </ul>
        </div>
        
        <div class="mercari-contents">
            <p>Mercari Feed</p>
            <button id="showmercari-feed">Show Feed</button>
            <ul id= "mercariList">
            <li><?php h($myFeeds->mercariFeed()) ?></li>
            </ul>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            var flag = 0;
                if(flag === 0) {
                    $('#mixiList').hide();    
                    $('#lineList').hide();
                    $('#mercariList').hide();
                };
                
                $("#showmixi-feed").on('click', function () {
                    $('#mixiList').toggle();
                });
                
                if(flag === 0) {

                };
                
                $("#showline-feed").on('click', function () {
                    $('#lineList').toggle();
                    
                });
                
                $("#showmercari-feed").on('click', function () {
                    $('#mercariList').toggle();
                    
                });
               
        </script>
    </body>
</html>