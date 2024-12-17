<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Donor</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            background-color:#8A0302 ; /* Light gray background */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Search Donor</h2>
        <form action="" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-5">
                    <input type="text" class="form-control" name="blood_group" placeholder="Enter Blood Group" required>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="place" placeholder="Enter Place" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>
        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'blood_bank');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['blood_group']) && isset($_GET['place'])) {
            $blood_group = $_GET['blood_group'];
            $place = $_GET['place'];

            $sql = "SELECT DISTINCT name, gender, blood_group, phone, place FROM donors WHERE blood_group='$blood_group' AND place LIKE '%$place%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-bordered'>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Blood Group</th>
                                <th>Phone</th>
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
                            <td>{$row['place']}</td>
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p class='text-danger'>No donors found.</p>";
            }
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
