<?php
class Movie
{
    // Difference between PUBLIC and VAR and PRIVATE
    public $title;
    private $rating;

    function __construct($title, $rating)
    {
        $this->title = $title;
        $this->setRating($rating);
    }

    function getRating()
    {
        return $this->rating;
    }

    function setRating($rating)
    {
        // $this->rating = $rating;
        if (
            $rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" ||
            $rating == "NR"
        ) {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }
}

// Ratings for movies : G, PG, PG-13, R, NR
$avengers = new Movie("avengers", "PG-13");
// echo $avengers->rating;
$lotr = new Movie("lotr", 'G');
echo $lotr->getRating();
// echo $avengers->setRating('DOG');
// echo $avengers->getRating();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters & Setters</title>
</head>

<body>

</body>

</html>