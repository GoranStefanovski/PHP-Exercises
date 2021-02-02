<?php
// Exercise One
// class myClass
// {
//     public function __construct()
//     {
//         echo "MyClass class has initialized !";
//     }
// };

// $asdkjhaskdja = new myClass;

// $asdkjhaskdja();


// Exercise Two
// class myName
// {
//     public $message = "Hello All, I am ";
//     public function introduece($name)
//     {
//         return $this->message . $name . '.';
//     }
// }

// $something = new myName();
// echo $something->introduece("Goran");

// Exercise Three
// class fact
// {
//     protected $_n;
//     public function __construct($n)
//     {
//         if (!is_int($n)) {
//             throw new InvalidArgumentException('Please enter a valid number');
//         };
//         $this->_n = $n;
//     }
//     public function result()
//     {
//     $flag = 1;
//     for ($i = 1; $i <= $this->_n; $i++) {
//         $flag *= $i;
//     }
//         return $flag;
//     }
// }
// $newFact = New fact(5);
// echo $newFact->result()