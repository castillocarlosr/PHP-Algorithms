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
    elseif ($nums == 1 || $nums == 5 || $nums == 10 || $nums == 25) {
        $coins = 1;
        return $coins;
    }
    /*
    elseif (in_array(1,5, 10, 25, $demonitions, true)) {
        $coins = 1;
        return $coins;
    }
    */
    else
    {
        //will fix syntax later
        $coins = min(1 + minNumberOfCoinsNeeded($nums - $b) for $b in_array $demonitions if $nums - $b >=0);
        return $coins;
    }
}

echo $coins;
?>

