<?php

$lanternfish = explode(",", (file_get_contents("day06.txt")));
//print_array($lanternfish);
$count = count($lanternfish);


for ($i = 0; $i < 80; $i++) {
    $newfishies = [];
    $count = count($lanternfish);
    foreach ($lanternfish as $fish){
        if ($fish == 0){
            $fish = 6;
            array_push($newfishies, 8);
        }
        else {
            $fish -= 1;
        }
        $newfishies[] = $fish;
    }
    $lanternfish = $newfishies;

}
$numberOfFishies = count($lanternfish);
echo $numberOfFishies;


function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}