<?php
$numbers = explode("\n", (file_get_contents("numbers.txt")));
$increased = 0;
for ($i = 0; $i < count($numbers) - 3; $i++) {
    $j = $i+1;
    $k = $j+1;
    $l = $k+1;
    if (($numbers[$i] + $numbers[$j] + $numbers[$k]) < ($numbers[$j] + $numbers[$k] + $numbers[$l])) {
        $increased += 1;
    }
}
echo $increased;