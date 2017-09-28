 <?php
// function displayWinners($pos, $numberRandom)
// {
//   global $score; 
//   $score = $score + $numberRandom;
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
    
    
}

function displayHand($pos, $suitesRandom, $numberRandom)
{
   // $symbol = $handArray[$pos][0];
    //$numberRandom = $handArray[$pos][$number];
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
    $score = 0; 
    $cont = true;
    while($score <= 42 && $cont == true)
    {
    $suitesRandom = rand(0,3);
    $numberRandom = rand(1,13);
    $suites = $suitesRandom;
    $number = $numberRandom;
    
    $handArray = array($suites, $number);
   // displayHand($i, $handArray,$suitesRandom,$number);
    displayHand($i, $suitesRandom, $numberRandom);
    $score = $score + $numberRandom;
    
    if ($score == 10)
    {
        $cont = true;
    }
    
    elseif ($score == 20)
    {
        $pro = rand(0,10);
        if ($pro == 0)
            {
                $cont = false;
            }
    }
    
    elseif ($score == 30)
    {
        $pro = rand(0,5);
        if ($pro == 0)
            {
                $cont = false;
            }
    }
    elseif ($score == 40)
    {
        $pro = rand(0,1);
        if ($pro == 0)
            {
                $cont = false;
            }
    }
    
    //displayWinners($i, $numberRandom);
    
    }
    echo $score;
    //displayHand($i, $suitesRandom, $numberRandom);
    
     
      //displayHand($i, $suitesRandom, $numberRandom); 
     # $handArray[i] = array($suitesRandom, $numberRandom);
}
?>


