<?php
// book.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>The Boyfriend</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tvoj CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- SHARE CSS -->
    <style>
        .share-wrapper {
            position: relative;
        }

        .share-btn {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .share-dropdown {
            position: absolute;
            top: 36px;          /* pod ikono */
            left: 0;            /* poravnano z ikono */
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            padding: 10px;
            display: none;
            z-index: 1000;
            min-width: 160px;
        }

        .share-dropdown a {
            display: block;
            padding: 8px 12px;
            text-decoration: none;
            color: black;
        }

        .share-dropdown a:hover {
            background: #f2f2f2;
            border-radius: 6px;
        }

        .share-dropdown.show {
            display: block;
        }
    </style>
</head>

<body class="app-bg">

<!-- ZGORNJI BAR -->
<div class="top-bar d-flex justify-content-between align-items-center px-3 py-2">

    <!-- SHARE -->
    <div class="share-wrapper">
        <button class="share-btn" id="shareBtn">🔗</button>

        <div id="shareMenu" class="share-dropdown">
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://example.com/book.php" target="_blank">
                📘 Facebook
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                📸 Instagram
            </a>
        </div>
    </div>

</div>

<!-- VSEBINA -->
<div class="container book-detail text-center pb-5">

    <img 
        src="boyfriend.png"
        class="detail-cover mb-3"
    >

    <h2 class="detail-title">The Boyfriend</h2>
    <p class="detail-author">Freida McFadden</p>

    <div class="rating mb-3">
        <span class="star" onclick="rate(1)">★</span>
        <span class="star" onclick="rate(2)">★</span>
        <span class="star" onclick="rate(3)">★</span>
        <span class="star" onclick="rate(4)">★</span>
        <span class="star" onclick="rate(5)">★</span>
    </div>

    <p class="book-description">
        The Boyfriend by Freida McFadden je psihološki triler o ženski,
        ki se zaplete v razmerje, ki se sprva zdi popolno, nato pa
        razkrije temačne skrivnosti.
    </p>

</div>

<!-- SPODNJA NAVIGACIJA -->
<div class="bottom-nav d-flex justify-content-around align-items-center">
    <a href="home.php" class="active">🏠</a>
    <a href="library.php">📚</a>
    <a href="pen.php">✏️</a>
    <a href="profile.php">👤</a>
</div>

<!-- JS -->
<script>
    function rate(stars) {
        const allStars = document.querySelectorAll(".star");
        allStars.forEach((star, index) => {
            star.classList.toggle("active", index < stars);
        });
    }

    const shareBtn = document.getElementById("shareBtn");
    const shareMenu = document.getElementById("shareMenu");

    shareBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        shareMenu.classList.toggle("show");
    });

    document.addEventListener("click", () => {
        shareMenu.classList.remove("show");
    });
</script>

</body>
</html>
