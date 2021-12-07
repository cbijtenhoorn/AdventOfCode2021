<?php
$boards = explode("\n", (file_get_contents("day04boards.txt")));
$numbers = explode(",", (file_get_contents("day04numbers.txt")));
print_array($boards);
print_array($numbers);



//incomplete. Because I just played bingo, my dudes! :)

//answer one: 87456
//answer two: 15561



function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}