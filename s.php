<?php
$h1 = mysqli_connect("localhost", "root", "", "admin");
$h2 = "SELECT * FROM cars";
$r = mysqli_query($h1, $h2);

// Start the table with a border
echo ("<table border=3>");

// Add the table headers
echo "<tr>
        <th>Car name</th>
        <th>Car model</th>
        <th>car color</th>
        <th>car Price in USD</th>
      </tr>";

// Loop through each row of the result set
while ($row = mysqli_fetch_array($r)) {
    echo "<tr>"; // Start a new table row
    echo "<td>" . $row[0] . "</td>"; // Add data for the first column (ID)
    echo "<td>" . $row[1] . "</td>"; // Add data for the second column (Car Name)
    echo "<td>" . $row[2] . "</td>"; // Add data for the third column (Model)
    echo "<td>" . $row[3] . "</td>"; // Add data for the fourth column (Price)
    echo "</tr>"; // Close the table row
}

// Close the table
echo "</table>";
?>
