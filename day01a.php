<?php
$numbers = explode("\n", (file_get_contents("day01.txt")));
$increased = 0;
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $numbers[$i - 1]) {
        $increased += 1;
    }
}
echo $increased;