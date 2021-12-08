<?php
$array = explode(PHP_EOL, (file_get_contents("day08a.txt")));
//print_array($array);

for($i = 0; $i < count($array); $i++){
    $array[$i] = explode(" ", $array[$i]);
}



$counter = 0;
for($j = 0; $j < count($array); $j++) {
    for ($i = 0; $i < count($array[$j]); $i++) {
        if (strlen($array[$j][$i]) == 2 || strlen($array[$j][$i]) == 3 || strlen($array[$j][$i]) == 4 || strlen($array[$j][$i]) == 7) {
            $counter++;
        }
    }
}

echo $counter;





function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}