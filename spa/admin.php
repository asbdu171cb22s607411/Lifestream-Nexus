<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Donor List</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        body {
            background-color:#8A0302 ; /* Light gray background */
        }
    </style>
<body>
    <div class="container">
        <h2 class="mt-4">Donor List</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <?php include('fetch_donors.php'); ?>
            </tbody>
        </table>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
