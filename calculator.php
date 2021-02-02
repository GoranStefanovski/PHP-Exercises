<?php
// Calculator
// echo $_GET["numb1"] + $_GET["numb2"];

// Mad Libs Game
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];


echo "Roses are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity <br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator & Mad Libs Game</title>
</head>

<body>
    <!-- Calculator -->

    <!-- <form action="calculator.php" method="get">
        <input type="number" name="numb1" placeholder="Number One">
        <input type="number" name="numb2" placeholder="Number Two">
        <input type="submit">
    </form> -->

    <!-- Mad Libs Game -->

    <form action="calculator.php" method="get">
        <input type="text" name="color" placeholder="color">
        <input type="text" name="pluralNoun" placeholder="pluralNoun">
        <input type="text" name="celebrity" placeholder="celebrity">
        <input type="submit">
    </form>
</body>

</html>