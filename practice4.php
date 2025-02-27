<?php
//define the number of rows and columns
$rows = $_POST['size'];
$columns = $_POST['size'];

//start the HTML table with borders
echo "<table border='1'>";

//header row for column index
echo "<tr><td></td>"; //empty top-left cell
for ($i = 1; $i <= $columns; $i++) {
    echo "<td><b>$i</b></td>"; //column indices
}
echo "</tr>";

//generate rows of the table
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>"; //start a new row
    echo "<td><b>$i</b></td>"; //row index
    //generate columns within the row
    for ($j = 1; $j <= $columns; $j++) {
        echo "<td>" . $i * $j . "</td>"; //calculate and display the product
    }
    echo "</tr>"; //end the row
}
echo "</table>"; //close the table
?>
