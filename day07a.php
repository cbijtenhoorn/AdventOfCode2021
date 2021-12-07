<?php
error_reporting(0);

//------------------------------------------------------------------------------
//I calculate which number appears most, this being the best position?
$positions = explode(",", (file_get_contents("day07.txt")));
$values = array_count_values($positions);
//arsort($values);
ksort($values);
$max = max($positions);
//echo $max;
print_array($positions);
//best position = 32? -- lolnope, that's not how that works.
//------------------------------------------------------------------------------


$count = count($positions);
for ($i = 0; $i < $count; $i++) {
    if ($positions[$i] < 354) {
        $dif = (354 - $positions[$i]);
        $fuel += $dif;
    } else if ($positions[$i] > 354) {
        $dif = ($positions[$i] - 354);
        $fuel += $dif;
    }
}
//echo $fuel;

//353: 342732
//354: 342730
//355: 342732


function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}