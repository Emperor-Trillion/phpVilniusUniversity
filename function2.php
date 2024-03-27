<?php
function rangeOperation($lowerBound, $upperBound)
{
    $highest = $number = 0;
    $lowerBound = $_POST['lowerBound'];
    $upperBound = $_POST['upperBound'];

    if ($upperBound < $lowerBound) {
        echo "Upper Range Value cannot be lesser than Lower Range Value! Try Again!";
        return NULL;
    } elseif ($lowerBound == $upperBound) {
        echo "Range of Value is the Same, use the single value Collatz Sequence Generator!";
        return NULL;
    } else {
        $dataArray = array();
        for ($i = $lowerBound; $i <= $upperBound; $i++) {
            $count = 0;
            $highest = $i;
            $number = $i;
            while ($number != 1) {
                if ($number % 2 == 0)
                    $number = $number / 2;
                else
                    $number = ((3 * $number) + 1);
                if ($number > $highest)
                    $highest = $number;
                $count = $count + 1;
            }
            array_push($dataArray, array($i, $highest, $count));
        }
        return $dataArray;
    }
}