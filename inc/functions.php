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
    //for($i=$No; $i <= 3; $i++){
        
    echo "<img id='player$No' src='img/players/player$No.png' width='50'/>";
    getHand();
    //}
    
}

function displayHand($pos, $suitesRandom, $numberRandom)
{
    //$symbol =
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
    //$suites = $suitesRandom;
    //$number = $numberRandom;
    //$handArray = array($suites, $number);
    //displayHand($i, handArray[$suites][$number])
    $numberRandom = rand(1,13);
    displayHand($i, $suitesRandom, $numberRandom);
    
     }
      //displayHand($i, $suitesRandom, $numberRandom); 
     # $handArray[i] = array($suitesRandom, $numberRandom);
}
?>


