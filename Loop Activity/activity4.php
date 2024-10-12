<?php

for ($i = 1; $i <= 10; $i++) {
    
    if ($i == 1) {
        continue; 
    }
    
    if ($i == 8) {
        break;
    }
    
    echo $i . "\n";
}
?>
