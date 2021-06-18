<?php
echo "reached autoloader";
spl_autoload_register('myAutoLoader');


function myAutoLoader($className)
{
    echo "\n registering autoloader";
    $path = 'classes/';
    $extension = '.xyz.php';
    $className = strtolower($className);
    $fileName = $path . $className . $extension;


    if (!file_exists($fileName)) {
        echo $fileName;
        echo "<br>";
        echo "File not found!!";
        return false;
    }

    include_once $path . $className . $extension;
}
