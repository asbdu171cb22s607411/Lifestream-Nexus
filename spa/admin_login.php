
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Donor List</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Registered Donors List</h2>

        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Blood Group</th>
                            <th>Phone</th>
                            <th>Age</th>
                            <th>Place</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['blood_group']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['place']}</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p class='text-danger text-center'>No donors found.</p>";
        }
        ?>

        <div class="text-center mt-4">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
    <?php
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'blood_bank');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the admin is logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    // Fetch donor details from the database
    $sql = "SELECT * FROM donors";
    $result = $conn->query($sql);
} else {
    // Redirect to login page if not logged in
    header("Location: admin_login.php");
    exit;
}
?>

</body>
</html>
