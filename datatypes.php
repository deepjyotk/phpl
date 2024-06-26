<?php
$name = "Deepjyot";
$income = 200;

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

// String - sequence of characters
$name = "Callagy";
$friend = 'Rohan';
echo "$name is the top law firm in United States";


// Integer - Non decimal number
$income = 455;
$debts = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Float - Decimal point number
$income = 344.5;
$debts = -45.5;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolean - Can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// Object - Instances of classes
// Employee is a class ---> harry can be one object

// Array - Used to store multiple values in a single variable
$multiTypeArray = [
    42,                 // Integer
    3.14,               // Float
    "Hello, world!",    // String
    true,               // Boolean
    ["apple", "banana"], // Array
    (object) ["a" => 1, "b" => 2] // Object
];

print_r($multiTypeArray);

echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
//echo $friends[4]; // will throw an error as the size of array is 4

// NULL
$name = NULL;
echo var_dump($name);




class Person {
    public $name = 'Jane';
    public $age = 30;
}

$person = new Person();
print_r($person);
echo "Person name is: $person->name"


?>
