<?php
// Exercise One
// $color = array('white', 'green', 'red', 'blue', 'black');

// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
//     the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

// Exercise Two
// $color = array('white', 'green', 'red');
// sort($color);
// echo "<ul>";
// foreach ($color as $y) {
//     echo "<li> $y </li>";
// }
// echo "</ul>";

// Exercise Three
// $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
// foreach ($ceu as $key => $value) {
//     echo "The capital of $key is $value <br>";
// }

// Exercise Four
// $x = array(1, 2, 3, 4, 5);
// // var_dump($x);
// unset($x[3]);
// $x = array_values($x);
// echo '
// ';
// var_dump($x);

// Exercise Five
// $color = array(4 => 'white', 6 => 'green', 11 => 'red');
// echo $color[4];

// Exercise Six
// function text($key, $value)
// {
//     echo "$value : $key " . "<br>";
// }
// $a = '{
//         "Title": "The Cuckoos Calling",
//         "Author": "Robert Galbraith",
//         "Detail":
//     { 
//         "Publisher": "Little Brown"
//     }
//     }';
// $j1 = json_decode($a, true);
// array_walk_recursive($j1, text);

// Exercise Seven
// $original = array('1', '2', '3', '4', '5');
// echo "Original Array: " . "\n";
// foreach ($original as $x) {
//     echo "$x ";
// }
// $inserted = '$';
// array_splice($original, 3, 0, $inserted);
// echo "\n After inserting '$' the array is :" . "\n";
// foreach ($original as $x) {
//     echo "$x ";
// }
// echo "\n";


// Exercise Eight
// $names = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// asort($names);
// echo "Sort by value: <br>";
// foreach ($names as $key => $value) {
//     echo "Age of $key: $value <br>";
// }
// echo "<br>";
// ksort($names);
// echo "Sort by key <br>";
// foreach ($names as $key => $value) {
//     echo "Age of $key: $value <br>";
// }
// echo "<br>";
// echo "descending order by value <br>";
// arsort($names);
// foreach ($names as $key => $value) {
//     echo "Age of $key: $value <br>";
// }
// echo "<br>";
// krsort($names);
// echo "descending order sorting by Key <br>";
// foreach ($names as $key => $value) {
//     echo "Age of $key: $value <br>";
// }

// Exercise Nine
// $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
// 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// $temp_array = explode(',', $month_temp);
// $tot_temp = 0;
// $temp_array_length = count($temp_array);
// foreach($temp_array as $temp) {
//     $tot_temp += $temp;
// }
// $avg = $tot_temp / $temp_array_length;
// echo "The Average Temperature Is : ".$avg .";
// ";
// sort($temp_array);
// echo "List of five lowest temperatures: <br>";
// for ($i=0; $i < 5; $i++) { 
//     echo $temp_array[$i]. ", ";
// }
// echo "<br>";
// echo "List of five highest temperatures <br>";
// for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++) { 
//     echo $temp_array[$i]. ", ";
// }


// Functions
// Exercise 4
// $sorts = [51, 14, 1, 21, 'hj'];
// function sortz($x)
// {
//     foreach ($x as $value) {

//         return sort($value, SORT_REGULAR);
//     }
// }

// print_r(sortz($sorts));

// $arrayOne = [51, 14, 3, 21];

// function snorting($arr)
// {

//     sort($arr, SORT_REGULAR);
// }

// $arrayOne =  sort($arrayOne, SORT_REGULAR);

// for ($x = 0; $x < count($arrayOne); $x++) {
//     echo $arrayOne;
//     echo "<br>";

// echo snorting($arrayOne);




// function array_sort($a)
// {
// 	for ($x = 0; $x < count($a); ++$x) {
// 		$min = $x;
// 		for ($y = $x + 1; $y < count($a); ++$y) {
// 			if ($a[$y] < $a[$min]) {
// 				$temp = $a[$min];
// 				$a[$min] = $a[$y];
// 				$a[$y] = $temp;
// 			}
// 		}
// 	}
// 	return $a;
// }
// $a = array(51, 14, 1, 21, 'hj');
// print_r(array_sort($a));
