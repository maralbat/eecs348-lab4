<?php
// Define the number of rows and columns
$rows = $_POST['size'];
$columns = $_POST['size'];

// Start the HTML table with borders for clarity
echo "<table border='1'>";

//Header row for column index
echo "<tr><td></td>"; // Empty top-left cell
for ($i = 1; $i <= $columns; $i++) {
    echo "<td><b>$i</b></td>"; // Column indices
}
echo "</tr>";

// Generate rows of the table
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>"; // Start a new row
    echo "<td><b>$i</b></td>"; //Row index
    // Generate columns within the row
    for ($j = 1; $j <= $columns; $j++) {
        echo "<td>" . $i * $j . "</td>"; // Calculate and display the product
    }
    echo "</tr>"; // End the row
}
echo "</table>"; // Close the table
?>
