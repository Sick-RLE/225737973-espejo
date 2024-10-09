<?php
function factorial($number) {
    $result = 1;
    
    for ($i = $number; $i > 0; $i--) {
        $result *= $i;
    }
    
    return $result;
}
$numFactorial = "";
echo "Please enter the factorial number: ";
$numFactorial = trim(fgets(STDIN));
$number = $numFactorial;
$factorialResult = factorial($number);

echo "Factorial of $number is: $factorialResult\n";
?>
