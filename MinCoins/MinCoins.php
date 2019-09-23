<?php
echo "Hello world of finding the min coin.";
echo "\n";

function minNumberOfCoinsNeeded($nums)
{
    $demonitions = array(1, 5, 10, 25);
    $coins = 0;
    if($nums == 0)
    {
        return $coins;
    }
    elseif ($nums in_array $demonitions 
    {
        $coins = 1;
        return $coins;
    }
    else
    {
        $coins = min(1 + minNumberOfCoinsNeeded($nums - $b) for $b in_array $demonitions if $nums - $b >=0);
        return $coins;
    }
}



?>

