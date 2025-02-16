<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       
        /* Custom Styling */
        .about-section {
            padding: 80px 0;
        }

        .about-title {
            color: #0c3e72;
            font-weight: bold;
        }

        .about-text {
            color: #6c757d;
        }

        .about-highlight {
            color: #ff6600;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
   

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6">
                <img src="about.png" alt="About Us" class="img-fluid rounded">
            </div>
            <!-- Text Content -->
            <div class="col-md-6">
                <p class="about-highlight">Who we are</p>
                <h2 class="about-title">We love to discover around the world</h2>
                <p class="about-text">
                    Waters make fish every without firmament saw had. Morning air subdue. 
                    Our. Air very one. Whales grass is fish whales winged night yielding 
                    land creeping that seed appear were bearing.
                </p>
                <p class="about-text">
                    Waters make fish every without firmament saw had. Morning air subdue. 
                    Our. Air very one. Whales grass is fish whales winged night yielding 
                    land creeping that seed appear were bearing.
                </p>
                <p class="about-text">
                    Waters make fish every without firmament saw had. Morning air subdue. 
                    Our. Air very one. Whales grass is fish whales winged night yielding 
                    land creeping that seed appear were bearing.
                </p>
            </div>
        </div>
    </div>
</section>
 <!-- Footer -->
 <?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
