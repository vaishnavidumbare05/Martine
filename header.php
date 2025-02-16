<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
     /*header css */
     .navbar {
            background-color: #eaefff !important;
        }

        .nav-item-start {
            margin-left: 5px;
        }

        .nav-item {
            margin-left: 50px;
        }

        .top-destination {
            color: orange !important;
            font-weight: bold;
        }

        .nav-link.custom {
            color: #0c3e84 !important;

        }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item-start">
                        <a class="nav-link top-destination" href="#">Top Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom" href="#">Asia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom" href="#">Europe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom" href="#">America</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>