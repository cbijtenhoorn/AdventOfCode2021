<?php
$array = explode(PHP_EOL, (file_get_contents("day08b.txt")));
//print_array($array);

for ($i = 0; $i < count($array); $i++) {
    $array[$i] = explode(" ", $array[$i]);
}

//print_array($array[0]);
$numbers = [];
//print_array($array[0]);


for ($j = 0; $j < 200; $j++) {
    for ($i = 0; $i < 10; $i++) { //check for the known strlen numbers and puts them in $numbers
        if (strlen($array[$j][$i]) == 2) {
            $numbers[$j][1] = $array[$j][$i];     //als de strlen 2 is, is het een 1
            $array[$j][$i] = "X";
        }
        if (strlen($array[$j][$i]) == 3) {
            $numbers[$j][7] = $array[$j][$i];     //als de strlen 3 is, is het een 7
            $array[$j][$i] = "X";
        }
        if (strlen($array[$j][$i]) == 4) {       //als de strlen 4 is, is het een 4
            $numbers[$j][4] = $array[$j][$i];
            $array[$j][$i] = "X";
        }
        if (strlen($array[$j][$i]) == 7) {
            $numbers[$j][8] = $array[$j][$i];     //als de strlen 7 is, is het een 8
            $array[$j][$i] = "X";
        }
    }

    for ($i = 0; $i < 10; $i++) {                   // 2 is de enige met strlen 5 die 2 overeenkomsten heeft met 4
        if (strlen($array[$j][$i]) == 5) {
            $internum = intersect($numbers[$j][4], $array[$j][$i]);
            if ($internum == 2) {
                $numbers[$j][2] = $array[$j][$i];
                $array[$j][$i] = "X";
            }
        }
    }

    for ($i = 0; $i < 10; $i++) {                    // 3 is de enige met strlen 5 die 2 overeenkomsten heeft met 1
        if (strlen($array[$j][$i]) == 5) {
            $internum = intersect($numbers[$j][1], $array[$j][$i]);
            if ($internum == 2) {
                $numbers[$j][3] = $array[$j][$i];
                $array[$j][$i] = "X";
            }
        }
    }

    for ($i = 0; $i < 10; $i++) {                    // 5 is de enige met strlen 5 die 4 overeenkomsten heeft met 3
        if (strlen($array[$j][$i]) == 5) {
            $internum = intersect($numbers[$j][3], $array[$j][$i]);
            if ($internum == 4) {
                $numbers[$j][5] = $array[$j][$i];
                $array[$j][$i] = "X";
            }
        }
    }

    for ($i = 0; $i < 10; $i++) {                    // 6 is de enige met strlen 6 die 1 overeenkomst heeft met 1
        if (strlen($array[$j][$i]) == 6) {
            $internum = intersect($numbers[$j][1], $array[$j][$i]);
            if ($internum == 1) {
                $numbers[$j][6] = $array[$j][$i];
                $array[$j][$i] = "X";
            }
        }
    }

    for ($i = 0; $i < 10; $i++) {                     // 9 is het enige getal met strlen 6 die 4 overeenkomsten heeft met 4
        if (strlen($array[$j][$i]) == 6) {
            $internum = intersect($numbers[$j][4], $array[$j][$i]);
            if ($internum == 4) {
                $numbers[$j][9] = $array[$j][$i];
                $array[$j][$i] = "X";
            }
        }
    }
    for ($i = 0; $i < 10; $i++) {                    // de enige niet-lege value is 0
        if (strlen($array[$j][$i]) == 6) {
            $numbers[$j][0] = $array[$j][$i];
            $array[$j][$i] = "X";
        }
    }
}

$values = explode(PHP_EOL, (file_get_contents("day08a.txt")));
for ($i = 0; $i < count($values); $i++) {
    $values[$i] = explode(" ", $values[$i]);
}

print_array($values[0]);
ksort($numbers[0]);
print_array($numbers[0]);

$answer = [];
for($k = 0; $k < 200; $k++) {
    $output = "";
    for ($j = 0; $j < 4; $j++) {
        for ($i = 0; $i < 10; $i++) {
            $length = strlen($values[$k][$j]);
            $internum = intersect($values[$k][$j], $numbers[$k][$i]);
            if ($internum == $length && strlen($numbers[$k][$i]) == $length) {
                $output .= $i;
            }
        }
    }
    $answer[$k] = $output;
}
echo array_sum($answer);

//een =	strlen 2; {unique}
//
//zeven = strlen 3; {unique}
//
//vier = 	strlen 4; {unique}
//
//twee = 	strlen 5;
//drie = 	strlen 5;
//vijf = 	strlen 5;
//
//zes = 	strlen 6;
//negen = strlen 6;
//nul = 	strlen 6;
//
//acht = 	strlen 7; {unique}


//$intersect_number = intersect($array[0][0], $array[0][1]);
//echo $array[0][0] . " intersects with " . $array[0][1] . " on " . $intersect_number . " times";


function intersect($one, $two)
{
    return count(array_intersect(str_split($one), str_split($two)));
}

function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}