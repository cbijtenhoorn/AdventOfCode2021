<?php
$binary = explode("\n", (file_get_contents("day03.txt")));

$onecounter = 0;
$zerocounter = 0;
foreach ($binary as $bin) {
    if ($bin[0] == "0") {
        $zerocounter += 1;
    }
    if ($bin[0] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';
//print_array($binary);

foreach ($binary as $bin) {
    if ($bin[0] == $least) {
        $oxygen[] = $bin;
    }
}
print_array($oxygen);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen as $bin) {
    if ($bin[1] == "0") {
        $zerocounter += 1;
    }
    if ($bin[1] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';

foreach ($oxygen as $bin) {
    if ($bin[1] == $least) {
        $oxygen2[] = $bin;
    }
}
print_array($oxygen2);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen2 as $bin) {
    if ($bin[2] == "0") {
        $zerocounter += 1;
    }
    if ($bin[2] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';

foreach ($oxygen2 as $bin) {
    if ($bin[2] == $least) {
        $oxygen3[] = $bin;
    }
}
print_array($oxygen3);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen3 as $bin) {
    if ($bin[3] == "0") {
        $zerocounter += 1;
    }
    if ($bin[3] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';

foreach ($oxygen3 as $bin) {
    if ($bin[3] == $least) {
        $oxygen4[] = $bin;
    }
}
print_array($oxygen4);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen4 as $bin) {
    if ($bin[4] == "0") {
        $zerocounter += 1;
    }
    if ($bin[4] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';

foreach ($oxygen4 as $bin) {
    if ($bin[4] == $least) {
        $oxygen5[] = $bin;
    }
}
print_array($oxygen5);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen5 as $bin) {
    if ($bin[5] == "0") {
        $zerocounter += 1;
    }
    if ($bin[5] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';

foreach ($oxygen5 as $bin) {
    if ($bin[5] == $least) {
        $oxygen6[] = $bin;
    }
}
print_array($oxygen6);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen6 as $bin) {
    if ($bin[6] == "0") {
        $zerocounter += 1;
    }
    if ($bin[6] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';

foreach ($oxygen6 as $bin) {
    if ($bin[6] == $least) {
        $oxygen7[] = $bin;
    }
}
print_array($oxygen7);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen7 as $bin) {
    if ($bin[7] == "0") {
        $zerocounter += 1;
    }
    if ($bin[7] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';

foreach ($oxygen7 as $bin) {
    if ($bin[7] == $least) {
        $oxygen8[] = $bin;
    }
}
print_array($oxygen8);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen8 as $bin) {
    if ($bin[8] == "0") {
        $zerocounter += 1;
    }
    if ($bin[8] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter < $onecounter || $onecounter == $zerocounter) {
    $least = 0;
}
if ($onecounter < $zerocounter) {
    $least = 1;
}
echo "The least occurring number for that index is: " . $least . '<br>';

foreach ($oxygen8 as $bin) {
    if ($bin[8] == $least) {
        $oxygen9[] = $bin;
    }
}
print_array($oxygen9);

function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

//echo bindec($oxy) * bindec($co2);
//handmatig, maar verkeerde antwoord zucht:
//110110111100
//001001000011