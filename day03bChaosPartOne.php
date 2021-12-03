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
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($binary as $bin){
    if ($bin[0] == $most){
        $oxygen[] = $bin;
    }
}
print_array($oxygen);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen as $bin){
    if ($bin[1] == "0") {
        $zerocounter += 1;
    }
    if ($bin[1] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen as $bin){
    if ($bin[1] == $most){
        $oxygen2[] = $bin;
    }
}
print_array($oxygen2);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen2 as $bin){
    if ($bin[2] == "0") {
        $zerocounter += 1;
    }
    if ($bin[2] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen2 as $bin){
    if ($bin[2] == $most){
        $oxygen3[] = $bin;
    }
}
print_array($oxygen3);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen3 as $bin){
    if ($bin[3] == "0") {
        $zerocounter += 1;
    }
    if ($bin[3] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen3 as $bin){
    if ($bin[3] == $most){
        $oxygen4[] = $bin;
    }
}
print_array($oxygen4);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen4 as $bin){
    if ($bin[4] == "0") {
        $zerocounter += 1;
    }
    if ($bin[4] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen4 as $bin){
    if ($bin[4] == $most){
        $oxygen5[] = $bin;
    }
}
print_array($oxygen5);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen5 as $bin){
    if ($bin[5] == "0") {
        $zerocounter += 1;
    }
    if ($bin[5] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen5 as $bin){
    if ($bin[5] == $most){
        $oxygen6[] = $bin;
    }
}
print_array($oxygen6);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen6 as $bin){
    if ($bin[6] == "0") {
        $zerocounter += 1;
    }
    if ($bin[6] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen6 as $bin){
    if ($bin[6] == $most){
        $oxygen7[] = $bin;
    }
}
print_array($oxygen7);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen7 as $bin){
    if ($bin[7] == "0") {
        $zerocounter += 1;
    }
    if ($bin[7] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen7 as $bin){
    if ($bin[7] == $most){
        $oxygen8[] = $bin;
    }
}
print_array($oxygen8);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen8 as $bin){
    if ($bin[8] == "0") {
        $zerocounter += 1;
    }
    if ($bin[8] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen8 as $bin){
    if ($bin[8] == $most){
        $oxygen9[] = $bin;
    }
}
print_array($oxygen9);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen9 as $bin){
    if ($bin[9] == "0") {
        $zerocounter += 1;
    }
    if ($bin[9] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen9 as $bin){
    if ($bin[9] == $most){
        $oxygen10[] = $bin;
    }
}
print_array($oxygen10);

$onecounter = 0;
$zerocounter = 0;
foreach ($oxygen10 as $bin){
    if ($bin[10] == "0") {
        $zerocounter += 1;
    }
    if ($bin[10] == "1") {
        $onecounter += 1;
    }
}
if ($zerocounter > $onecounter) {
    $most = 0;
}
if ($onecounter > $zerocounter || $onecounter == $zerocounter) {
    $most = 1;
}
echo "The most occurring number for that index is: " . $most . '<br>';

foreach ($oxygen10 as $bin){
    if ($bin[10] == $most){
        $oxygen11[] = $bin;
    }
}
print_array($oxygen11);





function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$oxy = 110011101111;
$co2 = 001101010011;
echo "HET ANTWOORD IS MISSCHIEN " . bindec($oxy) * bindec($co2) . '<br>';


$poging2oxy = 110110111100;
$poging2co2 = 001001000011;

echo "HET ANTWOORD IS MISSCHIEN " . bindec($poging2oxy) * bindec($poging2co2) . '<br>';



//handmatig, maar verkeerde antwoord zucht:
//110110111100
//001001000011