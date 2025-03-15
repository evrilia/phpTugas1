<?php

function displayHeader() {
    echo '<header>
        <div class="logo">
            <img src="Logo.png" alt="Baby Island">
            <span>Baby Island</span>
        </div>
        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#How to Order">How to Order</a>
            <a href="#Category">Category</a>
            <a href="#Login">Login</a>
        </nav>
    </header>';
}

function displayHome() {
    echo '<section class="home">
        <div class="content">
            <h2>Baby Island</h2>
            <h4>Solusi Praktis untuk Kebutuhan Si Kecil!</h4>
            <p>Kenapa beli kalau bisa sewa? Stroller, car seat, box bayi, 
                hingga mainan edukatif, semua ada di sini! Hemat, praktis, 
                dan ramah lingkungan. Yuk, sewa sekarang dan buat momen bersama 
                si kecil lebih nyaman! </p>
        </div>
    </section>';
}

function displayCategory() {
    $categories = [
        ["id" => "popup1", "image" => "Frame 11.png", "alt" => "Transportasi & Keamanan"],
        ["id" => "popup2", "image" => "Frame 12.png", "alt" => "Mainan & Edukasi"],
        ["id" => "popup3", "image" => "Frame 13.png", "alt" => "Tidur & Kenyamanan"]
    ];

    echo '<section class="section-card">';
    foreach ($categories as $category) {
        echo '<a href="#' . $category['id'] . '" class="card">
                <img src="' . $category['image'] . '" alt="' . $category['alt'] . '" class="card__img">
              </a>';
    }
    echo '</section>';
}

function displayPopups() {
    $popups = [
        ["id" => "popup1", "image" => "Frame 11.png", "title" => "Transportasi & Keamanan", "description" => "Produk sewa terbaik untuk menjaga keselamatan si kecil saat bepergian."],
        ["id" => "popup2", "image" => "Frame 12.png", "title" => "Mainan & Edukasi", "description" => "Mainan edukatif berkualitas untuk tumbuh kembang anak."],
        ["id" => "popup3", "image" => "Frame 13.png", "title" => "Tidur & Kenyamanan", "description" => "Perlengkapan tidur nyaman untuk bayi agar tidur lebih nyenyak."]
    ];

    foreach ($popups as $popup) {
        echo '<div class="popup" id="' . $popup['id'] . '">
            <div class="popup__content">
                <a href="#" class="popup__close">&times;</a>
                <div class="popup__img">
                    <img src="' . $popup['image'] . '" alt="' . $popup['title'] . '">
                </div>
                <div class="popup__header">
                    <h1>' . $popup['title'] . '</h1>
                    <p>' . $popup['description'] . '</p>
                </div>
            </div>
        </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Island</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        displayHeader(); 
    ?>
    <div class="navbar-bg">
        <?php 
            displayHome();
            displayCategory();
            displayPopups();
        ?>
    </div>
</body>
</html>
