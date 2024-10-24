<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
do {
    echo "Please enter the password: ";
    $input = trim(fgets(STDIN));

    if ($input !== "password123") {
        echo "Incorrect password.\n";
    }
} while ($input !== "password123");

echo "Access Granted.\n";
?>

</body>
</html>

