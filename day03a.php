<?php
$binarray = explode("\n", (file_get_contents("day03.txt")));
$gamma = "";
$epsilon = "";

for ($i = 0; $i < 12; $i++) {
    $zerocounter = 0;
    $onecounter = 0;
    foreach ($binarray as $bin) {
        $binary = str_split($bin);

        if ($binary[$i] == "0") {
            $zerocounter += 1;
        }
        if ($binary[$i] == "1") {
            $onecounter += 1;
        }
    }

    if ($zerocounter > $onecounter) {
        $gamma .= "0";
        $epsilon .= "1";
    }
    if ($onecounter > $zerocounter) {
        $gamma .= "1";
        $epsilon .= "0";
    }
}
echo "Gamma is " . $gamma . '<br>';
echo "Epsilon is " . $epsilon . '<br>';
echo "The answer is " . bindec($gamma) * bindec($epsilon);