<?php
//Scope Resolution Operator(::)

//Here is the first class
class FirstClass {
    //Properties
    const EXAMPLE = "You can't change this one!!!";

    //Methods
    public static function test() {
        $testing = "This is Test!!!";
        return $testing;
    }
}

$a = FirstClass::EXAMPLE;
//We can also access the test() class
//$a = FirstClass::test();
echo $a . "<br>";

//Here is the second class
class SecondClass extends FirstClass {
    //Properties
    public static $staticProperties = "A Static Properties!";

    //Methods
    public static function anotherTest() {
        echo parent::EXAMPLE . "<br>";
        echo self::$staticProperties;
    }
}

$b = SecondClass::anotherTest();
echo $b . "<br>";