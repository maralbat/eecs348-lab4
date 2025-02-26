<?php
// Outer loop for rows
for ($i = 1; $i < size+1; $i++) {
    // Inner loop for columns
    for ($j = 1; $j < size+1; $j++) {
        // Check if it's the first column
        if ($j == 1) {
            // Display the product of $i and $j, left-padded to 2 characters
            echo str_pad($i * $j, 2, " ", STR_PAD_LEFT);
        } else {
            // Display the product of $i and $j, left-padded to 4 characters
            echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
        }
    }
    // Move to the next line after each row is printed
    echo "\n";
}

?>