<?php
function minNumber(array $arr)
{
    $min = $arr[0];
    foreach ($arr as $val) {
        if ($min > $val) {
            $min = $val;
        }
    }
    return $min;
}

function maxNumber(array $arr)
{
    $max = $arr[0];
    foreach ($arr as $val) {
        if ($max < $val) {
            $max = $val;
        }
    }
    return $max;
}

print "min = " . minNumber([1,5,8,0,9,7,4,3,2]);
print "\n";
print "max =  " . maxNumber([1,5,8,0,9,7,4,3,2]);