<?php

class Person {
    //Properties
    public $name;
    public $eyeColor;
    public $age;

    /* Methods
    By using type declartion, we can throw an error if wrong type is given!
    Work with:
        - class/interface name
        - array
        - callable
        - bool
        - float
        - int
        - string
        - iterable
        - object
    */
    public function setName(string $newName) {
        $this->name = $newName;
    }

    public function getName() {
        return $this->name;
    }
}