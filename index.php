<?php

// Crash Course
// $firstName = 'Goran';
// $lastName = 'Stefanovski';


// $Labels = ['Goran' => 30, 'Ovaj' => 80];

// // echo print_r($Labels);


// function displayName($a, $b, $c)
// {
//     return $a + $b + $c;
// };

// function processFunction()
// {
//     return displayName(1, 1, 1);
// };

// // echo processFunction();

// // For each1

// $data = ['bmw', 'toyota', 'ovaj'];

// foreach ($data as $car) {
//     // echo $car . '<br>';
// };

// // forarray loop 

// for ($x = 1; $x <= 10; $x++) {
//     echo $x;
// };

///////////////////////////////////////////////
// PHP Programming Language Tutorial - Full Course (freeCodeCamp.org)
// https://www.youtube.com/watch?v=OK_JCtrrv-c&ab_channel=freeCodeCamp.org

//  Variables and data types

$name = 'Goran';
$age = 20;

/////////////////////////
// Working with strings

$wordOne = 'Giraffe Academy';

/////////////////////////
// Working with Numbers


/////////////////////////
// Post and Get

// echo $_POST["password"];

// echo $_POST["password"];

/////////////////////////
// Arrays
// CheckBox


$friends = array('Pero', 'Filip', 'Matiz', 'Jovan');
$fruits = $_POST["fruits"];
echo $fruits[0]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course Study</title>
</head>

<body>

    <!-- Crash Course -->
    <!-- <h1>
        <?php echo $firstName . ' ' . $lastName ?>
    </h1> -->

    <!-- ///////////////////////////////// -->

    <!-- PHP Programing Language Tutorial -->

    <?php

    //  Variables and data types
    // echo "My name is $name and i am $age years old <br>";
    echo "There once was a man named " . $name . " <br>";
    echo "He was " . $age . " years old <br>";
    // $name = 'Hinata';
    // $age = "2 Months";
    echo "He really liked the name $name <br>";
    echo "But didn't like being $age <br>";


    /////////////////////////
    // Working with strings

    echo strtolower("$wordOne <br>");
    echo strtoupper("$wordOne <br>");
    echo "Length of string :";
    echo strlen($wordOne);
    echo "<br>";
    echo $wordOne[0], "<br>";
    echo $wordOne[3], "<br>";
    echo "Replacing First Word Of String Giraffe Academy: ";
    echo str_replace("Giraffe", "Gorans", $wordOne,);
    echo "<br>";
    echo "Pulling whole words from an array to form a new array: ";
    echo substr("$wordOne", 8);
    echo "<br>";
    echo "The output goes here:";

    /////////////////////////
    // Working with Numbers



    /////////////////////////
    // Getting User Input


    /////////////////////////
    // URL Parameters
    ?>


    <!-- ///////////////////////// -->
    <!-- // Getting User Input -->

    <!-- <form action="index.php" method="get">
        Name:
        <input type="text" name="name">
        <input type="number" name="age">
        <input type="submit">
    </form>

    <!-- <h4>Your Name Is: </h4> -->
    <!-- <h4>Your Age Is: </h4> -->
    <br><br>

    <!-- ///////////////////////// -->
    <!-- // Get And Post -->

    <!-- <form action="index.php" method="post">
        <input type="password" name="password" placeholder="Password">
        <input type="submit">
    </form> -->


    <!-- ///////////////////////// -->
    <!-- // Arrays -->
    <!-- // CheckBox -->

    <!-- <form action="index.php" method="post">
        Apple: <input type="checkbox" name="fruits[]" value="apple"><br>
        Orange: <input type="checkbox" name="fruits[]" value="orange"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pear"><br>
        <input type="submit">
    </form>

     -->

    <!-- 
    <br><br><br>
    <h3>CALCULATOR!!</h3>
    <br>
    <form action="index.php" method="post">
        First Number : <input type="number" step="0.1" name="num1"> <br>
        OP: <input type="text" name="op"> <br>
        Second Number : <input type="number" step="0.1" name="num2"> <br>
        <input type="submit">
    </form>

    <!-- <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];


            if ($op == '+') {
                echo $num1 + $num2;
            } else if ($op == "-") {
                echo $num1 - $num2;
            } else if ($op = "*") {
                echo $num1 * $num2;
            } else if ($op == "/") {
                echo $num1 / $num2;
            } else {
                echo "Invalid Operator";
            }
            ?> --> -->

    <!-- Switch Statement -->

    <form action="index.php" method="post">
        What was your grade?
        <input type="text" name="grade" placeholder="grade">
        <input type="submit">
    </form>
    <br>
    <br>
    <br>
    <br>
    <form action="index.php" method="post">
        is filip a srce? <input type="text" name="name" placeholder="Please enter yes or no">\
        <input type="submit">
    </form>


    <?php
    // $grade = $_POST["grade"];
    // echo "$grade <br>";

    // switch ($grade) {
    //     case 'A':
    //         echo "You did amazing";
    //         break;
    //     case 'B':
    //         echo "You did good";
    //         break;

    //     case 'C':
    //         echo "You all right";
    //         break;
    //     case 'D':
    //         echo "Could do better";
    //         break;
    //     case 'F':
    //         echo "You fail";
    //         break;
    //     default:
    //         echo "Not Valid Grade";
    //         break;
    // }


    // $filip = 'Srce';
    // echo "<br>";
    // echo $filip;
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // $srce = $_POST["name"];

    // $srce = $_POST["name"];

    // function myFunction($input)
    // {
    //     if ($input == "da") {
    //         echo "filip is srce";
    //     } else if ($input == "ne") {
    //         echo "filip is not a srce";
    //     }
    // };

    // myFunction($srce);




    ?>

    <?php echo "Goran <br>";
    include "calculator.php";
    echo "Stefanovski <br>" ?>




</body>

</html>