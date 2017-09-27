<?php

        
function displaySymbol($randomValue, $pos)
  {
       
       
        
        switch ($randomValue)
        {
            case 0: $symbol = "a1";
                break;
            
            case 1: $symbol = "a2";
                break;
            
            case 2: $symbol = "a3";
                break;
                
            case 3: $symbol = "a4";
                break;
        }
        echo "<img id='reel$pos' src='img/$symbol.jpg' alt = '$symbolb' title='".ucfirst($symbol)."' width='70'/>";
  }  

function play()
{
  for ($i=1; $i<17; $i++)
  {
      ${"randomValue" . $i} = rand(0,3);
      displaySymbol(${"randomValue" . $i}, $i);
  }
  displayPoints($randomValue1, $randomValue2, $randomValue3);
} 

?>