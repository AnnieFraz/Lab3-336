<?php 

function makeNickName($firstName, $lastName) {
    global $nickName;
    $nickName = $firstName[0] . $lastName[0] . $lastName[1] . $lastName[2];
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
            makeNickName("Jason", "Henderson");
            echo $nickName;
        ?>
    </body>
</html>