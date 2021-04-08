<?php
define("constant", "constant variable");
echo constant . "<br/>";
$var = 'Hello';
$$var = 'world';
echo "$var ${$var} <br/>";
echo "$var $Hello <br/>" ;

$first = 'I';
$second = 'first';
$I = 'second';

echo $I . '<br/>';
echo $$I . '<br/>';
echo $$$I . '<br/>';

$num = 1;
$Num = 2;
echo $num . " " . $Num . "<br/>";

$boolean = true;
echo $boolean . "<br/>";
$boolean = false;
echo $boolean . "<br/>";


echo 'You are $I in line! \n<br/>';

echo "\tYou are $I in line! \nnext line <br/>";

$num = 3;
echo <<<EOT
String number $num
more text <br/>
EOT;
$num++;
$str = <<<EOT
String number $num
more text<br/>
EOT;
print_r($str);

$str = <<<'EOT'
String number $num
more text<br/>
EOT;
print_r($str);

echo "Concatenation " . 'example' . "!" . '<br/>';

$arr = ["one", "two", "three"];
foreach($arr as $str1){
    echo "$str1 ";
}
echo "<br/>";

$arr = array(1, 2, 3);
echo $arr . '<br/>';
print_r($arr);

echo "$arr[0] $arr[1] $arr[2] <br/>";

$arr = array(
    "four" => 4,
    "five" => 5,
    "six" => 6,
);
echo "$arr[four] $arr[five] $arr[six] <br/>";

$arr = [
    "four" => 4,
    "five" => 5,
    "six" => 6,
];
echo "$arr[four] $arr[five] $arr[six] <br/>";

$str = "one,two,three,four";
$arr = explode(",", $str, 3);
echo "$arr[0] $arr[1] $arr[2] <br/>";

$str = "one,two,three,four";
$arr = explode(",", $str, -1);
echo "$arr[0] $arr[1] $arr[2] $arr[3]<br/>";

$str = "one,two,three,four";
$arr = explode(",", $str);
echo "$arr[0] $arr[1] $arr[2] $arr[3]<br/>";

$str = implode("! ", $arr);
echo "$str <br/>";

$a = 15;
$b = $a;
echo "$b <br/>";

$num = 8;

if($num >= 11){
    echo "Number greater than 11<br/>";
}else{
    echo "Number less than 11<br/>";
}

if($num >=10 and $num <= 20){
    echo "The number is in the range from 10 to 20<br/>";
}else{
    echo "The number isn`t in the range from 10 to 20<br/>";
}

$sum = "5" + 10;
echo "$sum <br/>";

$sum = (int)"5" + 10;
echo "$sum <br/>";

echo (int)12.6 . "<br/>";

class Animal
{
    public $name;

    public function __construct($name)
    {
        $this ->name = $name;
    }
}

class Cat extends Animal
{
    public $age;


    public function __construct($name, $age)
    {
        parent:: __construct($name);
//        Animal::  __construct($name);
        $this->age = $age;
    }

}
$simba = new Cat("Simba", 1.5);

print_r($simba);
echo "<br/>";
echo "Name: $simba->name, age: $simba->age<br/>";


class Human
{
    private static $name = "Tom";
    public function __construct(){}
    public static function getInstance()
    {
        if (null === self::$name)
        {
            self::$name = new self();
        }
        return self::$name;
    }
}
$tom = Human::getInstance();
$tom1 = Human::getInstance();
if($tom === $tom1){
    echo "Same objects<br/>";
}else{
    echo "Different objects<br/>";
}
$simba1 = new Cat("Simba", 1.5);
if($simba === $simba1){
    echo "Same objects<br/>";
}else{
    echo "Different objects<br/>";
}