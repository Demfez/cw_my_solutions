<?php
//You get an array of numbers, return the sum of all of the positives ones.
//Example [1,-4,7,12] => 1 + 7 + 12 = 20
//Note: if there is nothing to sum, the sum is default to 0.


//without array_filter
function positive_sum($arr) {
    $sum = 0;

    foreach($arr as $a){
        if($a > 0){
            $sum = $a + $sum;
        }
    }

    return $sum;
}


//with array_filter
function positive_sum_filter($a) {
    $filtered = array_filter($a, function ($n) {
        return $n > 0;
    });
    return array_sum($filtered);
}

echo positive_sum([1,-4,7,12]);
