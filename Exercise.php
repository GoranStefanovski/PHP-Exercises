<?php

////////////////////////////////////////////////
// function calcFact($num)
// {
//     if ($num == 0) {
//         return 1;
//     } else {
//         return $num * calcFact($num - 1);
//     }
// }

// print_r(calcFact(10) . "\n");

////////////////////////////////////////////////
// function sub($n1, $n2)
// {
//     if ($n1 === $n2) {
//         return 3 * ($n1 + $n2);
//     } else {
//         return $n1 + $n2;
//     }
// };

// echo sub(3, 4);
// echo "\n";
// echo sub(3, 3);

/////////////////////////////////////////////////
// function diff($n)
// {
//     $x = 51;

//     if ($n > $x) {
//         return ($n - $x) * 3;
//     } else {
//         return $x - $n;
//     }
// };

// echo diff(10);
// echo "<br>";
// echo diff(53);
// echo "<br>";
// echo diff(51);

////////////////////////////////////////////////////
// function calc($n1, $n2)
// {
//     if ($n1 == 30 || $n2 == 30 || $n1 + $n2 == 30) {
//         echo 'true';
//     } else {
//         echo 'false';
//     }
// }

// calc(25, 5);
// echo "\n";
// calc(5, 25);
// echo "\n";
// calc(20, 30);
// echo "\n";
// calc(20, 25);

/////////////////////////////////////////////////////
// function calc($num)
// {
//     if (abs($num - 100) <= 10 || abs($num - 200) <= 10) {
//         echo 'True';
//     } else {
//         echo 'False';
//     }
// }

// echo calc(103);
// echo "\n";
// echo calc(90);
// echo "\n";
// echo calc(89);

///////////////////////////////////////////////////////
// function arr($arr)
// {
//     if (strlen($arr) > 2 && substr($arr, 0, 2) == 'if') {
//         return $arr;
//     } else {
//         return 'If ' . $arr;
//     }
// }

// echo arr('If else');
// echo "\n";
// echo arr('else');
// echo "\n";
// echo arr('smth');


/////////////////////////////////////////////////// 6666666
// function remove($word, $i)
// {
//     return substr($word, 0, $i) . substr($word, $i + 1, strlen($word) - $i);
// }

// echo remove("Python", 1) . "\n";
// echo remove("Python", 0) . "\n";
// echo remove("Python", 4) . "\n";

// I need explanation !!!!!!!!!!!!!!!!!!!!!!!!!!!
///////////////////////////////////////////////////// 
// Exercise 7
// function test($str)
// {
//     return strlen($str) > 1 ? substr($str, strlen($str) - 1) . substr($str, 1, strlen($str) - 2) . substr($str, 0, 1) : $str;
// }

// echo test("abcd");
// echo "\n";
// echo test("a");
// echo "\n";
// echo test("xy");
// echo "\n";

////////////////////////////////////////////////////////
// Exercise 8
// function test($str)
// {
//     // return strlen($str) < 2 ? $str : substr($str, 0, 2) . substr($str, 0, 2) . substr($str, 0, 2) . substr($str, 0, 2);
//     $repeat = substr($str, 0, 2);
//     echo $repeat;
//     return strlen($str) < 2 ? $str : str_repeat($repeat, 3);
// };

// echo test("C Sharp");
// echo "\n";
// echo test("JS");
// echo "\n";
// echo test("a");
// echo "\n";

///////////////////////////////////////////////////////
// Exercise 9
// function test($str)
// {
//     $char = substr($str, strlen($str) - 1);
//     return $char . $str . $char;
// };

// echo test('Red');
// echo "\n";
// echo test('Green');
// echo "\n";
// echo test(1);

//////////////////////////////////////////////////////////
// Exercise 10
// function test($num)
// {
//     return $num % 3 == 0 || $num % 7 == 0;
// }

// var_dump(test(3));
// echo "\n";
// var_dump(test(14));
// echo "\n";
// var_dump(test(12));
// echo "\n";
// var_dump(test(37));


// ///////////////////////////////////////////////////////
// // Exercise 11
// function test($str)
// {
//     $repeat = substr($str, 0, 3);
//     return strlen($str) <= 3 ? str_repeat($str, 3) : $repeat . $str . $repeat;
// }

// echo test('Python');
// echo "\n";
// echo test('JS');
// echo "\n";
// echo test('Code');
// echo "\n";

//////////////////////////////////////////////////////////////
// Exercise 12
// function test($str)
// {
//     $check = substr($str, 0, 2);
//     // echo $check;
//     if ($check === "C#") {
//         echo "true";
//     } else {
//         echo "false";
//     }
// }

// echo test('PHP');
// echo "\n";
// echo test('C#');
// echo "\n";
// echo test('C++');
// echo "\n";
// echo test('Java Script');
// echo "\n";
// echo test('C# Sharp');
// echo "\n";


/////////////////////////////////////////////////////////////////
// Exercise 13
// function test($n1, $n2)
// {
//     return $n1 < 0 && $n2 > 100 || $n2 < 0 && $n1 > 100;
// }

// echo test(120, -1);
// echo "\n";
// echo test(-1, 120);
// echo "\n";
// echo test(2, 120);
// echo "\n";


///////////////////////////////////////////////////////
// Exercise 14
// function test($n1, $n2)
// {
//     return ($n1 > 100 && $n2 < 200) || ($n1 < 200 && $n2 > 100);
// }

// echo var_dump(test(100, 199));
// echo "\n";
// echo var_dump(test(250, 300));
// echo "\n";
// echo var_dump(test(105, 190));
// echo "\n";

/////////////////////////////////////////////////////////
// Exercise 15
// function test($x, $y, $z)
// {
//     $nums = [$x, $y, $z];
//     $flag = 0;
//     foreach ($nums as $value) {
//         if ($value >= 20 && $value <= 50) {
//             $flag = 1;
//             break;
//         }
//     }
//     if ($flag == 1) {
//         print_r('true');
//     } else {
//         print_r('false');
//     }
// }

// print_r(test(11, 19, 12));


// //////////////////////////////////////////////////////\
// Exercise 16
// function test($x, $y)
// {
//     $nums = [$x, $y];
//     $flag = 0;
//     foreach ($nums as $value) {
//         if ($value > 20 && $value < 50) {
//             $flag = 1;
//             break;
//         }
//     }
//     if ($flag == 1) {
//         echo "true";
//     } else {
//         echo "false";
//     }
// }

// echo test(10, 25);
// echo "\n";
// echo test(20, 84);
// echo "\n";



////////////////////////////////////////////////////////
// Exercise 17
// function test($str)
// {
//     return substr($str, 0, 2) == 'yt' ? substr($str, 0, 1) . substr($str, 3, strlen($str) - 2) : $str;
// }

// echo test('Python');
// echo "\n";
// echo test('jsues');
// echo "\n";
// echo test('ytade');


/////////////////////////////////////////////////////////
// Exercise 18
// function test($n1, $n2, $n3)
// {
//     return max($n1, max($n2, $n3));
// }

// echo test(1, 2, 3) . "\n";
// echo test(1, 1, 2) . "\n";
// echo test(1, 1, 1) . "\n";
// echo test(1, 2, 2) . "\n";



///////////////////////////////////////////////////////////
// Exercise 19
// function test($n1, $n2)
// {
//     $max = 100;
//     $val1 = $max - $n1;
//     $val2 = $max - $n2;
//     return $val1 == $val2 ? 0 : ($val1 < $val2 ? $n1 : $n2);
// }

// echo test(78, 95) . "\n";
// echo test(99, 95) . "\n";
// echo test(95, 95) . "\n";


/////////////////////////////////////////////////////////
// Exercise 20
// function test($n1, $n2)
// {
//     if (($n1 > 40 && $n2 < 50) || ($n1 < 50 && $n2 > 40) || ($n1 > 50 && $n2 < 60) || ($n1 < 60 && $n2 > 50)) {
//         return true;
//     } else {
//         return false;
//     }
// }

// var_dump(test(78, 95)) . "\n";
// var_dump(test(25, 35)) . "\n";
// var_dump(test(40, 50)) . "\n";
// var_dump(test(55, 60)) . "\n";


//////////////////////////////////////////////////////////////////
// Exercise 21
// function myFunctionen($n1, $n2)
// {
//     $nums = [$n1, $n2];
//     if (($n1 > 20 && $n2 < 30) || ($n1 < 30 && $n2 > 20)) {
//         echo max($nums);
//     } else {
//         echo false;
//     }
// }

// echo myFunctionen(78, 95) . "\n";
// echo myFunctionen(20, 30) . "\n";



///////////////////////////////////////////////////////////////////////
// Exercise 22
// function test($str)
// {
//     $word = 0;

//     for ($i = 0; $i < strlen($str); $i++) {
//         if (substr($str, $i, 1) == 'z') {
//             $word++;
//         }
//     }

//     return $word > 1 && $word < 4;
// }

// var_dump(test('Fizz')) . "\n";
// var_dump(test('Buzzz')) . "\n";
// var_dump(test('Steak')) . "\n";


///////////////////////////////////////////////////////
// Exercise 23
// function bigger($n1, $n2)
// {
//     $num = 0;
//     $nums = [$n1, $n2];
//     for ($i = 0; $i < $nums; $i++) {
//         if (substr($n1, $i, -1) == substr($n2, $i, -1)) {
//             echo max($nums);
//             break;
//         }
//     }
// }

// echo bigger(123, 456) . "\n";
// echo bigger(12, 512) . "\n";
// echo bigger(7, 87) . "\n";


/////////////////////////////////////////////////////////
// Exercise 24
// function letters($str)
// {
//     $lastLett = substr($str, -3);
//     return substr($str, 0, -3) . strtoupper($lastLett);
// }

// echo letters('Python') . "\n";
// echo letters('JavaScript') . "\n";
// echo letters('js') . "\n";
// echo letters('php') . "\n";


//////////////////////////////////////////////////////
// Exercise 25
// function repeat($str, $n)
// {
//     return str_repeat($str, $n);
// }


// echo repeat("JS", 5) . "\n";
// echo repeat("JS", 2) . "\n";
// echo repeat("JS", 1) . "\n";

// ////////////////////////////////////////////////////
// Exercise 26
// function repp($str, $num)
// {
//     $newStr = substr($str, 0, 3);
//     return str_repeat($newStr, $num);
// }



// echo repp("Python", 2) . "\n";
// echo repp("Python", 3) . "\n";
// echo repp("JS", 3) . "\n";


/////////////////////////////////////////////////////
// Exercise 27
// function aa($str)
// {
//     $flag = 0;
//     for ($i = 0; $i < strlen($str) - 1; $i++) {
//         if (substr($str, $i, 1) == 'a') $flag++;
//         if ((substr($str, $i, 2) == 'aa') && $flag < 2) {
//             return true;
//         };
//         return false;
//     }
// }

// var_dump(aa("caab")) . "\n";
// var_dump(aa("babaaab")) . "\n";
// var_dump(aa("aaaaa")) . "\n";








?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises One</title>
</head>

<body>


</body>

</html>