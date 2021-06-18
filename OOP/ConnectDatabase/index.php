<?php
   /** 
    * include_once 'classes/dbh.class.php';
    * include_once 'classes/test.class.php';
    * include_once 'classes/users.class.php';
    * include_once 'classes/userscontr.class.php';
    * include_once 'classes/usersview.class.php';
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "index";
        include 'includes/class-autoload.inc.php';

        //$usersObj = new UsersView();
        //$usersObj->showUsers("Dishant");
//
        //$usersObj2 = new UsersContr();
        //$usersObj2->createUser("ABCD", "EFGH");
        $usersObj = new Test();
        $usersObj->printecho();
    ?>
</body>
</html> 