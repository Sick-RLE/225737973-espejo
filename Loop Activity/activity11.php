<?php
$fibonacci = [0, 1];
$count = 2;

while ($count < 10) {
    $nextNumber = $fibonacci[$count - 1] + $fibonacci[$count - 2];
    $fibonacci[] = $nextNumber;
    $count++;
}

echo "The first 10 numbers of the Fibonacci sequence are:\n";
foreach ($fibonacci as $number) {
    echo $number . " ";
}
echo "\n";
?>
