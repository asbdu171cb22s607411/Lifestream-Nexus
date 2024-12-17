<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank - Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            background-color: #B79455; /* Light brown background */
            color: white;
        }
        .navbar {
            background-color: #8A0302; /* Dark red */
        }
        .btn-custom {
            background-color:#B79455;
            color: wheat;
        }
        .btn-custom:hover {
            background-color: #B02E13;
        }
        .hero-section {
            background-color: #8A0302; /* Dark red for hero section */
            text-align: center;
            padding: 60px 20px;
            color:#B79455 ;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .image-section img {
            max-width: 100%;
            height: auto;
        }
        .info-section {
            background-color: white;
            color: #8A0302;
            padding: 40px 20px;
            text-align: center;
        }
        .info-section h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: bold;
        }
        .info-section p {
            font-size: 1.2rem;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="logo.jpg" alt="Logo" width="50" height="50" class="me-2">
                <span class="fs-3 fw-bold" style="color:#B79455;">Lifestream Nexus</span>
            </a>
            <div>
                <a href="register.php" class="btn btn-custom mx-2">Register</a>
                <a href="search.php" class="btn btn-custom mx-2">Search Donor</a>
                <a href="login.php" class="btn btn-custom mx-2">Login</a>
                <a href="admin.php" class="btn btn-custom mx-2">Admin</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Donate Your Blood, Save a Life Today</h1>
        <p>Your small act of kindness can save lives. Become a hero by donating blood.</p>
        <div>
            <img src="dont.jpg" alt="Blood Donation" class="img-fluid" style="max-width: 15%;">
        </div>
    </div>

    <!-- Information Section -->
    <div class="info-section">
        <h2>Why Blood Donation Matters</h2>
        <h3>
            Every two seconds, someone needs blood. Blood donation is vital in saving lives during medical emergencies, surgeries, and treatments.
            It is a noble act that ensures the availability of life-saving blood for those in need. Whether you're a first-time donor or a regular one,
            your contribution makes a significant difference. Join us in our mission to bridge the gap between donors and recipients.
    </h3>
        <h3>
            With every donation, you not only save lives but also promote community health. Together, we can create a network of hope and support.
            Start your journey as a donor today, and let's make a life-changing impact.
    </h3>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-5" style="background-color: #8A0302; color: white;">
        © 2024 Lifestream Nexus. All rights reserved.
    </footer>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</body>
</html>
