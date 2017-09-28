<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <style>
            @import url("css/style.css");
        </style>
    </head>
    <body>
        <h1>SilverJack</h1>
        <div id = "board" >
         <div id ="player1" >
        <?php
        include 'inc/functions.php';
        player(1);
        ?>
        </div>
        <div id = "player2">
       <?php
        player(2);
        ?>
        </div>
        <div id ="player3">
            <?php
            player(3);
            ?>
        </div>
        <div id = "player4">
            <?php
            player(4);
            ?>
        <form>
            <input type="submit" value="Play Again"/>
        </form>
  
    </body>
</html>
