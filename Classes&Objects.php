<?php

// Exercise One
// class Book
// {
//     var $title;
//     var $author;
//     var $pages;

//     function __construct($aTitle, $aAuthor, $aPages)
//     {
//         $this->title = $aTitle;
//         $this->author = $aAuthor;
//         $this->pages = $aPages;
//     }
// };

// $book1 = new Book('LOTR', 'Goran Stefanovski', 421);
// ///////////////////////////////////
// // Change params from the outside
// // $book1->title = 'Hunger Games';  
// $book2 = new Book('Harry Potter', 'Filip Talev', '123');
// // $book1->title = "The Lord Of The Rings<br>";
// // $book1->author = "Goran Stefanovski<br>";
// // $book1->pages = 421;

// echo $book1->title;
// echo "<br>";
// echo $book2->title;

// echo $book1->author;
// echo $book1->pages;

// $book2->title = "Harry Potter<br>";
// $book2->author = "Filip Talev<br>";
// $book2->pages = 123;

// echo $book2->title;


////////////////////////////////////////////////////
// Exercise Two

class Student
{
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa)
    {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    function hasHonors()
    {
        if ($this->gpa > 3.5) {
            return "true";
        }
        return "false";
    }
}

$student1 = new Student('Goran Stefanovski', 'SOTU', 2.8);
$student2 = new Student('Filip Talev', 'Gorna', 3.6);
$students = array($student1, $student2);

foreach ($students as $value) {
    # code...
}

echo $student1->hasHonors()
// echo $studentOne->name;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and objects</title>
</head>

<body>

</body>

</html>