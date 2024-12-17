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
        <?php if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) { ?>
            <!-- Admin Login Form -->
            <h2 class="text-center">Admin Login</h2>

            <?php
            if (isset($error_message)) {
                echo "<p class='text-danger text-center'>$error_message</p>";
            }
            ?>

            <form method="POST" action="">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        <?php } else { ?>
            <!-- Registered Donors List -->
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

            // Logout link
            echo "<div class='text-center mt-4'>
                    <a href='?logout=true' class='btn btn-danger'>Logout</a>
                  </div>";
        }
        ?>
    </div>
</body>
</html>
