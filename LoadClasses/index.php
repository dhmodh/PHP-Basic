<?php

include 'includes/outerloader.php';
include 'classes/person.php';

/*spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path = "OOP/LoadClasses/classes/"; //This path is from my Root Folder.
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    include_once $fullPath;
}*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <?php

        $person1 = new Person("DMX", 20);
        echo $person1->getPerson();

        echo "<br>";

    ?>

</body>

</html>