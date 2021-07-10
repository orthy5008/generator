<?php
function getSummation (...$number){
    $total_num = 0;
    foreach ($number as $numbers){
        $total_num += $numbers;
        yield $total_num;
    } 
    return $total_num;
}

$user = getSummation (1, 2, 3, 10, 67, 45, 89, 0, -1);

foreach ($user as $result){
    echo "$result\n";
}

