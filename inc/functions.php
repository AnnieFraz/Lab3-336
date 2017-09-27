<?php
// function displayWinners($winner, $handArray)
// {
//   #global $score; 
//   #$score = $score . $handArray[0][i];
//   echo $winner . " wins " . $score . " points!";
// }
// function calculateScore($iNo, $score){
//     for ($i =0; $i < 3; $i++)
//     {
//         for ($j=1; $j< 13; $j++)
//         {
//          $score = $score . $handArray[$j][$i];   
//         }
//     }
//     if ($score > 42){
//         echo $playerNo . "loses";
//     }
    
// }
// function replay(){
//     player(1);
// }
  
function player($No){
    //'player$No'
    for($i=$No; $i <= 3; $i++){
        getHand();
    echo "<img id='player$No' src='img/players/player$No.png' width='50'/>";
    }
    
}

function displayHand($pos, $suitesRandom, $numberRandom)
{
switch ($suitesRandom)
            {
                case 0: $symbol ='clubs';
                    break;
                case 1: $symbol ='diamonds';
                    break;
                case 2: $symbol ='hearts';
                    break;
                case 3: $symbol = 'spades';
                    break;
            }
                
            echo "<img id='card$pos' src='img/$symbol/$numberRandom.png' width='50'/>";
           
}

function getHand()
{
    for ($i=0; $i<=4; $i++)
    {
    $suitesRandom = rand(0,3);
    $numberRandom = rand(1,13);
    displayHand($i, $suitesRandom, $numberRandom);
     }
      //displayHand($i, $suitesRandom, $numberRandom); 
     # $handArray[i] = array($suitesRandom, $numberRandom);
}
?>


