<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Packages</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* cards css */
        .title{
            text-align: center;
            font-size: 40px;
            color: #0c3e72;
            margin-bottom: 20px;

        }
        .package-section {
            padding: 60px 0;
        }

        .package-title {
            text-align: center;
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 20px;
        }

        .package-card {
            border: none;
            transition: 0.3s;
        }

        .package-card:hover {
            transform: scale(1.05);
        }

        .package-price {
            color: red;
            font-weight: bold;
        }

        .star-rating {
            color: gold;
        }
    </style>
</head>
<body>
     <!-- Header -->
     <?php include 'header.php'; ?>
   

   <!-- Navbar -->
   <?php include 'navbar.php'; ?>

<!-- Packages Section -->
<section class="package-section">
    <div class="container">
        <!-- Section Title -->
         <h2 class="title">Top Hotel & Restaurants</h2>
        <p class="package-title">
            Waters make fish every without firmament saw had. Morning air subdue.
            Our. Air very one. Whales grass is fish whales winged.
        </p>
        
        <div class="row">
            <!-- Package 1 -->
            <div class="col-md-4">
                <div class="card package-card">
                    <img src="hotel1.png" class="card-img-top" alt="Hotel Polonia">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hotel Polonia</h5>
                        <p class="star-rating">★★★★★ <span class="text-muted">(210 reviews)</span></p>
                        <p class="text-muted">London, United Kingdom</p>
                        <p class="text-muted">Date: 23 Aug 2019</p>
                        <p class="text-muted">Duration: 5 days</p>
                        <p class="package-price">From $500</p>
                    </div>
                </div>
            </div>

            <!-- Package 2 -->
            <div class="col-md-4">
                <div class="card package-card">
                    <img src="hotel2.png" class="card-img-top" alt="Hotel Polonia">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hotel Polonia</h5>
                        <p class="star-rating">★★★★★ <span class="text-muted">(210 reviews)</span></p>
                        <p class="text-muted">London, United Kingdom</p>
                        <p class="text-muted">Date: 23 Aug 2019</p>
                        <p class="text-muted">Duration: 5 days</p>
                        <p class="package-price">From $500</p>
                    </div>
                </div>
            </div>

            <!-- Package 3 -->
            <div class="col-md-4">
                <div class="card package-card">
                    <img src="hotel3.png" class="card-img-top" alt="Hotel Polonia">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hotel Polonia</h5>
                        <p class="star-rating">★★★★★ <span class="text-muted">(210 reviews)</span></p>
                        <p class="text-muted">London, United Kingdom</p>
                        <p class="text-muted">Date: 23 Aug 2019</p>
                        <p class="text-muted">Duration: 5 days</p>
                        <p class="package-price">From $500</p>
                    </div>
                </div>
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
