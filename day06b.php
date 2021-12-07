<?php
error_reporting(0);
$input = explode(",", file_get_contents("Day06test.txt"));

foreach ($input as $num) {
//    echo $num . '<br>';
    $fishcounter[$num] += 1;
}
//echo "Fishcounter: " . '<br>';
//print_array($fishcounter);


for ($i = 0; $i < 80; $i++) {
    $tempArray = [];
    for($x = 1; $x < 9; $x++) {
        $amount = $fishcounter[$x];
        $tempArray[$x - 1] += $amount;
    }
    $tempArray[6] += $fishcounter[0];
    $tempArray[8] = $fishcounter[0];
    $fishcounter = $tempArray;
    print_array($fishcounter);
}
print_array($fishcounter);
$fishies = array_sum($fishcounter);
echo $fishies;










//for ($d = 0; $d < 18; $d++) {    //days
//        foreach ($lanternfish as $fish) {
//            if ($fish == 8) {
//                $fish = 7;
//                $originalArray[8]--;
//                $originalArray[7]++;
//            }
//            if ($fish == 7) {
//                $fish = 6;
//                $originalArray[7]--;
//                $originalArray[6]++;
//            }
//            if ($fish == 6) {
//                $fish = 5;
//                $originalArray[6]--;
//                $originalArray[5]++;
//            }
//            if ($fish == 5) {
//                $fish = 4;
//                $originalArray[5]--;
//                $originalArray[4]++;
//            }
//            if ($fish == 4) {
//                $fish = 3;
//                $originalArray[4]--;
//                $originalArray[3]++;
//            }
//            if ($fish == 3) {
//                $fish = 2;
//                $originalArray[3]--;
//                $originalArray[2]++;
//            }
//            if ($fish == 2) {
//                $fish = 1;
//                $originalArray[2]--;
//                $originalArray[1]++;
//            }
//            if ($fish == 1) {
//                $fish = 0;
//                $originalArray[1]--;
//                $originalArray[0]++;
//            }
//            if ($fish == 0) {
//                $fish = 6;
//                $originalArray[0]--;
//                $originalArray[6]++;
//                $originalArray[8]++;
//            }
//        }
//}




//for ($i = 0; $i < 80; $i++) {
//    $newfishies = [];
//    $count = count($lanternfish);
//    foreach ($lanternfish as $fish) {
//        if ($fish == 0) {
//            $fish = 6;
//            array_push($newfishies, 8);
//        } else {
//            $fish -= 1;
//        }
//        $newfishies[] = $fish;
//    }
//    $lanternfish = $newfishies;
//
//}
//$numberOfFishies = count($lanternfish);
//echo $numberOfFishies;

function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}