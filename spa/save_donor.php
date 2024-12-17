<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'blood_bank');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $phone = $_POST['phone'];
    $place = $_POST['place'];

    $sql = "INSERT INTO donors (name, gender, blood_group, phone, place) VALUES ('$name', '$gender', '$blood_group', '$phone', '$place')";

    if ($conn->query($sql) === TRUE) {
        echo "Donor registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
