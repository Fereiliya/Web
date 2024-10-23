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
    <title>Cek Harga - Girls Frontline Laundry</title>
    <link rel="stylesheet" href="style.css">
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

    <div class="content">
        <h2>Cek Harga Laundry</h2>
        <form id="priceForm">
            <label for="weight">Berat (kg):</label>
            <input type="number" id="weight" name="weight" min="1" required><br>

            <label for="service">Jenis Layanan:</label>
            <select id="service" name="service">
                <option value="5000">Cuci Kering - 5000</option>
                <option value="8000">Cuci Setrika - 8000</option>
                <option value="6000">Setrika - 6000</option>
            </select><br>

            <label for="speed">Kecepatan:</label>
            <select id="speed" name="speed">
                <option value="reguler">Reguler</option>
                <option value="express">Ekspress (Tambahan 2000/kg)</option>
            </select><br>

            <label for="membership">Status Pelanggan:</label>
            <select id="membership" name="membership">
                <option value="non_member">Non Member</option>
                <option value="member">Member (Diskon 10%)</option>
            </select><br>

            <label for="coupon">Apakah ini pencucian ke-6? (Kupon 2kg gratis)</label>
            <input type="checkbox" id="coupon" name="coupon"><br>

            <button type="button" id="checkPriceBtn">CHECK</button>
        </form>

        <p id="result"></p>
    </div>

    <div class="footer">
        <p></p>
    </div>

    <script src="cek_harga.js"></script>
</body>
</html>
