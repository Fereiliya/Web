<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girls Frontline Laundry - Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="header">
        <h1>Girls Frontline Laundry</h1>
        <ul class="nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="cek_harga.php">Cek Harga</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="banner">
        <div class="slider">
            <img src="banner1.jpg" alt="Banner Image 1">
            <img src="banner2.jpg" alt="Banner Image 2">
        </div>
    </div>
    <div class="content">
        <h2>Company Profile</h2>
        <p>About this company, this company was founded by G&K for laundry division but quickly gain mass attenntion.
            We provide the best quality service for your clothes, battle gear, poncho, boots, shoes, etc.
            Our company uses the latest generation T-dolls and lastest generation washing machine to ensure the best for our customers.
        </p>
    </div>
    <div class="footer">
        <p></p>
    </div>

    <script>
        $(document).ready(function(){
            let currentIndex = 0;
            const images = $(".slider img");
            images.hide();
            images.eq(currentIndex).show();

            setInterval(function(){
                images.eq(currentIndex).hide();
                currentIndex = (currentIndex + 1) % images.length;
                images.eq(currentIndex).show();
            }, 3000); // 3 seconds for each slide
        });
    </script>
</body>
</html>
