<?php
error_reporting(0);
$positions = explode(",", (file_get_contents("day07.txt")));
$values = array_count_values($positions);
//arsort($values);
ksort($values);
//$max = max($positions);
//echo $max;
$average = array_sum($positions)/count($positions);
$average= floor($average);
//echo $average;
// average: 476,584
//print_array($positions);

//Triangular number sequence =  n(n+1)/2



$count = count($positions);
for ($i = 0; $i < $count; $i++) {
    if ($positions[$i] < $average) {
        $dif = ($average - $positions[$i]);
        $n = ($dif * ($dif+1)) / 2;
        $fuel += $n;
    } else if ($positions[$i] > $average) {
        $dif = ($positions[$i] - $average);
        $n = ($dif * ($dif+1)) / 2;
        $fuel += $n;
    }
}
echo $fuel;

//475:  92336203
//476:  92335207
//477:  92335211

function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}