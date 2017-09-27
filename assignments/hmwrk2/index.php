<!DOCTYPE html>
<html>
    <head>
        <title>Bingo!</title>
        <style>
            @import url("css/styleish.css");
        </style>
    </head>
    <body>
    <div id="main">
        <?php
        include 'inc/functions.php';
        play();
        ?>
        
        <form>
            <input type="submit" value="New Card"/>
        </form>
        
    </div>
    </body>
</html>