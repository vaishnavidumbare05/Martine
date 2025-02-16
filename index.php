<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
        /* Background Image*/
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Prevent scrolling */
        }
        .hero-section {
            background: url('home.png') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            /* Optional dark overlay */
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 60px;
            font-weight: bold;
        }

        .hero-text {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .hero-btn {
            background-color: #0c3e72;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .hero-btn:hover {
            background-color: #084a8b;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
   

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    

    <!-- Home page -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Saintmartine</h1>
            <p class="hero-text">Let’s start your journey with us, your dream will come true</p>
            <a href="#" class="btn hero-btn">Discover Now</a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>