<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = "OOP/LoadClasses/classes/"; //This path is from my Root Folder.
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}

//Adding the Function to other class and then call the File is also the other to call classes automatically.
//Or else the "include" is the best way.


