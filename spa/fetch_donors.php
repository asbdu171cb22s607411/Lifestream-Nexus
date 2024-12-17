<?php
// Database connection
$servername = "localhost"; // Replace with your database server
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "blood_bank"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch donor details
$sql = "SELECT * FROM donors"; // Replace 'donors' with your donor table name
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>"; // Assuming 'id' is the primary key
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['blood_group'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
       
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No donors found.</td></tr>";
}

// Close connection
$conn->close();
?>
