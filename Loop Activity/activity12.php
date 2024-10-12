<?php

function reverseString($string) {
    $reversed = "";
    $length = strlen($string);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    return $reversed;
}

while (true) {
    echo "Enter a string (Type 'end' to quit): ";
    $input = trim(fgets(STDIN));

    if (strtolower($input) === 'end') {
        echo "Exiting the program.\n";
        break;
    }
    
    $reversedString = reverseString($input);
    echo "The reversed string is: $reversedString\n";
}
?>
