<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    
    return true;
}

while (true) {
    echo "Enter a number (Type 'end' to quit): ";
    $input = trim(fgets(STDIN));
    if (strtolower($input) === 'end') {
        echo "Exiting the program.\n";
        break;
    }

    if (is_numeric($input)) {
        $num = (int)$input;
        if (isPrime($num)) {
            echo "$num is a prime number.\n";
        } else {
            echo "$num is not a prime number.\n";
        }
    } else {
        echo "Please enter a valid number.\n";
    }
}
?>
