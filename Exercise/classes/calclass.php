<?php
    //include 'includes/cal.php';
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URL'];
class Calc 
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $one, int $two, int $three) {
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }

    public function calculator() {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;

            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;

            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;

            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;

            default:
                echo "Error!!!";
                break;
        }
    }
}