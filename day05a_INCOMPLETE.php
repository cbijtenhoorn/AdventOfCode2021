<?php
$coordinates = explode("\n", (file_get_contents("day05.txt")));


//-----------------------------------------------------------------------------------------------------------------
////My janky code where I filter for the horizontal and vertical ones and reformat them to Excel-coordinates.....
//foreach ($coordinates as $coords){
//    $coords = str_replace(" -> ", ",", $coords);
//    $coords = explode(",", $coords);
//    if($coords[0] == $coords[2] || $coords[1] == $coords[3]){
//
//        $coords[0] = $coords[0] + 1;
//        $coords[1] = $coords[1] + 1;
//        $coords[2] = $coords[2] + 1;
//        $coords[3] = $coords[3] + 1;
//        echo "R" . $coords[1] . "C" . $coords[0] . ":R" . $coords[3] . "C" . $coords[2] . '<br><br>';
//    }
//}
//-----------------------------------------------------------------------------------------------------------------



//foreach ($coordinates as $coords) {
//    $coords = str_replace(" -> ", ",", $coords);
//    $coords = explode(",", $coords);
//
//    if($coords[0] == $coords[2] || $coords[1] == $coords[3]) {
//        $from = [$coords[0], $coords[1]];
//        $to = [$coords[2], $coords[3]];
//    }
//}





////I think I made a multidimensional array of 1000x1000 here filled with 0's? Maybe?
//
//$grid = array(); // array of columns
//for($columns = 0; $columns <1000; $columns++){
//    $grid[$columns] = array(); // array of cells for $column
//    for($rows = 0; $rows < 1000; $rows++){
//        $grid[$columns][$rows] = 0;
//    }
//}
//print_array($grid);





function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}