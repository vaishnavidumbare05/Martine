<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /*navbar css */
        .custom-navbar {
            background-color: white !important;
            padding: 15px 0;
        }

        .brand-name {
            font-weight: bold;
            font-size: 30px;
            margin-left: 5px;
            color: #0c3e72;
            text-decoration: none;
        }

        .custom-nav {
            margin-left: 150px;
        }

        .custom-nav-link {
            color: #0c3e84 !important;
            font-weight: normal;
        }

        .book-btn {
            background-color: rgb(233, 80, 14);
            color: white;
            border-radius: 5px;
            padding: 8px 15px;
            margin-left: auto;
        }

        .book-btn:hover {
            background-color: rgb(184, 62, 10);
        }

        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="brand-name" href="#">Martine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#customNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="customNavbar">
                <ul class="navbar-nav custom-nav">
                    <li class="nav-item"><a class="nav-link custom-nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link custom-nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link custom-nav-link" href="package.php">Package</a></li>
                    <li class="nav-item"><a class="nav-link custom-nav-link" href="#">Pages</a></li>
                    <li class="nav-item"><a class="nav-link custom-nav-link" href="#">Contact</a></li>
                </ul>
                <a href="#" class="btn book-btn">Book Now</a>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>