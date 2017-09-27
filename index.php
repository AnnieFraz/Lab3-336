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
        
        
        
         <div id ="player1">
        <?php
        include 'inc/functions.php';
        getHand();
        ?>
        </div>
        <div id = "player2">
       <?php
        getHand();
        ?>
        </div>
        <div id ="player3">
            <?php
            getHand();
            ?>
        </div>
        <div id = "player4">
            <?php
            getHand();
            ?>
        </div>
        
        
        
        
       
        
          
   
                
           


    </body>
</html>