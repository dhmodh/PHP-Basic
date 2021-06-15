<?php

//Regular class
include_once 'classes/simpleclass.php';

$obj = new SimpleClass();
$obj->helloWorld();

//Anonymous class

$newObj = new class() {
    public function helloWorld() {
        echo "DMX";
    }
};

$newObj->helloWorld();