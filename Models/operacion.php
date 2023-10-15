<?php
    $number1 = $_GET["n1"];
    $number2 = $_GET["n2"];
    $op = $_GET["op"];

    $result = 0;
    
    if ($op == 'suma') {
        $operation = new operation();
        $result = $operation->suma($number1,$number2);
    }

    if ($op == 'resta') {
        $operation = new operation();
        $result = $operation->resta($number1,$number2);
    }

    if ($op == 'multiplicación') {
        $operation = new operation();
        $result = $operation->multiplicacion($number1,$number2);
    }

    if ($op == 'división') {
        $operation = new operation();
        $result = $operation->division($number1,$number2);
    }

    class operation{

        public function suma($num1, $num2){
            $totalsum = $num1 + $num2;
            return $totalsum;
        }

        public function resta($num1, $num2){
            $totalres = $num1 - $num2;
            return $totalres;
        }

        public function multiplicacion($num1, $num2){
            $totalmul = $num1 * $num2;
            return $totalmul;
        }

        public function division($num1, $num2){
            $totaldiv = $num1 / $num2;
            return $totaldiv;
        }
    }
    

?>