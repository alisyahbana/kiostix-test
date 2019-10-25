<?php
function switchString(array $arr)
{
    $result = [];
    foreach ($arr as $val) {
        switch ($val) {
            case ($val % 25) === 0:
                $newVal = "KI";
                break;
            case ($val % 40) === 0:
                $newVal = "OS";
                break;
            case ($val % 60) === 0:
                $newVal = "TIK";
                break;
            case ($val % 99) === 0:
                $newVal = "KIOSTIX";
                break;
            default:
                $newVal = $val;
        }
        array_push($result, $newVal);
    }
    return $result;
}

print_r (switchString(range(1, 200)));
