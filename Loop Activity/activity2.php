<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

while (true) {
    echo "Please enter a Number (Type 'end' to quit): ";
    
    $userAns = trim(fgets(STDIN));

    if (strtolower($userAns) === 'end') {
        echo "Exiting the program.\n";
        break;
    }

    if (!is_numeric($userAns)) {
        echo "Please enter a valid number.\n";
        continue;
    }

    $num = $userAns;

    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo "$num x $i = $result\n";
    }
}

?>
</body>
</html>

