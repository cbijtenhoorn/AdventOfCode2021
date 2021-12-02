<?php
$steps = explode("\n", (file_get_contents("day02.txt")));
$depth = 0;
$horizontal = 0;
$aim = 0;

foreach ($steps as $step) {
    $direction = explode(" ", $step);
    if ($direction[0] == "forward") {
        $horizontal += $direction[1];
        if ($aim != 0) {
            $depth += ($aim * $direction[1]);
        }
    }
    else if ($direction[0] == "down") {
        $aim += $direction[1];
    }
    else if ($direction[0] == "up") {
        $aim -= $direction[1];
    }
}
echo $horizontal . '<br>';
echo $depth . '<br><br>';
echo $horizontal * $depth;