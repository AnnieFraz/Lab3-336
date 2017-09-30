 <?php

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
            echo "<img id='card$pos' src='img/$symbol/$numberRandom.png' width='75'/>";
}

function getHand()
{
    $taken = array(0,0,0,0); 
    $avail = array(); 
    for ($n = 0; $n < 4; $n++)
    {
        $j = rand(1,4);          
        while($taken[$j-1] == 10) 
        {
            $j = rand(1,4);
        }
        $taken[$j-1] = 10;          
        echo "<img id='player$j' src='img/players/player$j.png' width='75'/>";
        echo  "<h2>cody</h2>";
        ${"score" . $j} = 0;
        $cont = true;
        while(${"score" . $j} <= 42 && $cont == true)
        {
            $suitesRandom = rand(0,3);
            $numberRandom = rand(1,13);
            if ($avail[$numberRandom][$suitesRandom] == 100)    
            {
                $suitesRandom = rand(0,3);
                $numberRandom = rand(1,13);
            }
            else                                                    
            {
                $avail[$numberRandom][$suitesRandom] = 100;
                $suites = $suitesRandom;
                $number = $numberRandom;
            }
                                                              
            $handArray = array($suites, $number);
            displayHand($i, $suitesRandom, $numberRandom);
            ${"score" . $j} = ${"score" . $j} + $numberRandom;
    
            if (${"score" . $j} > 30 && ${"score" . $j} <=42)   
            {
                $cont = false;
            }
        }
        echo ${"score" . $j};
        echo "<br>";
    }

    $p1win = $score2+$score3+$score4;
    $p2win = $score1+$score3+$score4;  
    $p3win = $score2+$score1+$score4;
    $p4win = $score2+$score3+$score1;
    for ($s=42; $s > 30; $s--)
    {
        if ($score1 == $s)
        {
            echo "<h1>Cody wins $p1win points</h1>";
            break;
        }
        elseif ($score2 == $s)
        {
            echo "<h1>Kara wins $p2win points</h1>";
            break;
        }
        elseif ($score3 == $s)
        {
            echo "<h1>Fernando wins $p3win points</h1>";
            break;
        }
        elseif ($score4 == $s)
        {
            echo "<h1>Dani wins $p4win points</h1>";
            break;
        }
    }
}
?>


