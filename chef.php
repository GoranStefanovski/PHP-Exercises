<?php
class Chef
{
    function makeChicken()
    {
        echo "The chef makes chicken <br>";
    }

    function makeSalad()
    {
        echo "The chef makes salad <br>";
    }

    function makeSpecialDish()
    {
        echo "The chef makes BBQ ribs <br>";
    }
}

class ItalianChef extends Chef
{
    function makePasta()
    {
        echo "The Chef Makes Pasta <br>";
    }

    function makeSpecialDish()
    {
        echo "The chef makes chicken parm <br>";
    }
}

$chef = new Chef();
$chef->makeChicken();
$chef->makeSpecialDish();

$ItalianChef = new ItalianChef();
$ItalianChef->makeChicken();
$ItalianChef->makePasta();
$ItalianChef->makeSpecialDish();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Program</title>
</head>

<body>

</body>

</html>