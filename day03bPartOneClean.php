<?php
$binary = explode("\n", (file_get_contents("day03.txt")));

for ($index = 0; $index < 12; $index++) {
$onecounter = 0;
$zerocounter = 0;
foreach ($binary as $bin) {
if ($bin[$index] == "0") {
$zerocounter += 1;
}
if ($bin[$index] == "1") {
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

$oxygen = [];
foreach ($binary as $bin){
if ($bin[$index] == $most){
$oxygen[] = $bin;
}
}
$binary = $oxygen;
print_array($oxygen);
}

function print_array($array)
{
echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$oxygenanswer = "110011101111";
$scrubberanswer = "001101010011";

echo $oxygenanswer . '<br>';
echo $scrubberanswer . '<br><br>';

//3311
//851

echo bindec($oxygenanswer) . " (zou 3311 moeten zijn)" . '<br>';
echo bindec($scrubberanswer) . " (zou 851 moeten zijn" . '<br><br>';

echo (3311 * 851);