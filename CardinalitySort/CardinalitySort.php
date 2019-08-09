<?php
echo "Hello second php console program!";
echo "\n";

function cardinalitySort($nums)
    {
        $arrayLen = sizeof($nums) - 1;
        $arrayNums = $nums;
        //$arrayNums = array_shift($arrayNums);
        //$arrayNums = unset($arrayNums[1]);

        sortBySetBitCount($arrayNums, $arrayLen);
        $finalAnswer = ReturnCardList($arrayNums, $arrayLen);
        return $finalAnswer;
    }


    function countBits($a)
    {
        $count = 0;
        while ($a > 0)
        {
            if (($a & 1) > 0)
            {
                $count += 1;
            }
            $a = $a >> 1;
        }
        return $count;
    }

    function insertionSort($arr, $aux, $n)
    {
        for ($i = 1; $i < $n; $i++)
        {
            $key1 = $aux[$i];
            $key2 = $arr[$i];
            $j = $i - 1;

            while ($j >= 0 && $aux[$j] > $key1)
            {
                $aux[$j + 1] = $aux[$j];
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }
            $aux[$j + 1] = $key1;
            $arr[$j + 1] = $key2;
        }
    }

    function sortBySetBitCount($arr, $n)
    { 
        $aux = array($n);
        for ($i = 0; $i < $n; $i++)
        {
            $aux[$i] = countBits($arr[$i]);
        }
        insertionSort($arr, $aux, $n);
    }

    function ReturnCardList($arr, $n)
    {
        $answer = array();
        for ($i = 0; $i < $n; $i++)
        {
            array_push($answer, $arr[$i]);
        }
        return $answer;
    }

    $input = array(5, 31, 15, 7, 3, 2);

    $answer = cardinalitySort($input);
    echo implode(", ", $answer);
?>