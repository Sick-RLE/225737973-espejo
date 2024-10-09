<?php
$favoriteMovies = [
    "The Notebook",
    "The House of us",
    "John Wick 3",
    "Interstellar",
    "Parasite"
];

$count = 1;
foreach ($favoriteMovies as $movie) {
    echo $count . ". " . $movie . "\n";
    $count++;
}
?>
