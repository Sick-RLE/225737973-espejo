<?php
$passwordId = "password123";
$userInput = "";

do {
    echo "Please enter the password: ";
    
    $userInput = trim(fgets(STDIN));
    
    if ($userInput !== $passwordId) {
        echo "Incorrect password.\n";
    }
    
} while ($userInput !== $passwordId);

echo "Access Granted.\n";
?>