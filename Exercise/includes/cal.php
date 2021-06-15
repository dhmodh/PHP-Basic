<?php
   declare(strict_types = 1);
   include 'classes/calclass.php';
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL'];

   $oper = $_POST["oper"];
   $num1 = $_POST["num1"];
   $num2 = $_POST["num2"];

   $calc = new Calc($oper, (int)$num1, (int)$num2);

   try {
       echo $calc->calculator();
   } catch (TypeError $e) {
       echo "Error!!! " . $e->getMessage();
   }
?>