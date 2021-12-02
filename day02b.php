<?php
$steps = explode("\n", (file_get_contents("day02.txt")));
$depth = 0;
$horizontal = 0;
$aim = 0;

foreach ($steps as $step) {
    $direction = explode(" ", $step);
    if ($direction[0] == "forward") {
        $horizontal += $direction[1];
        $depth += ($aim * $direction[1]);
    }
    else if ($direction[0] == "down") {
        $aim += $direction[1];
    }
    else if ($direction[0] == "up") {
        $aim -= $direction[1];
    }
//    switch ($direction[0]) {                                  alternative: switch case
//        case "forward":
//            $horizontal += $direction[1];
//            $depth += ($aim * $direction[1]);
//            break;
//        case "down":
//            $aim += $direction[1];
//            break;
//        case "up":
//            $aim -= $direction[1];
//            break;
//    }
}
echo "The horizontal position is: " . $horizontal . '<br>';
echo "The depth is: " . $depth . '<br><br>';
echo "The answer is: " . $horizontal * $depth;