<?php
    declare(strict_types = 1);
    include 'includes/person.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    
        <?php
            $person1 = new Person();

            try {
                $person1->setName("DMX");
                echo $person1->getName();
            } catch (TypeError $e) {
                echo "Error!: " . $e->getMessage();
            }
        ?>

    </body>
</html>