<?php
// prebrane.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Prebrane knjige</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="app-bg">

<!-- ZGORNJI BAR -->
<div class="top-bar d-flex justify-content-between align-items-center px-3 py-2">
    <a href="library.php" class="text-decoration-none text-light">←</a>
    <span>🔗</span>
</div>

<!-- NASLOV -->
<div class="container mt-3 text-center">
    <h4 class="section-title">Prebrane knjige</h4>
</div>

<!-- SEZNAM KNJIG (SCROLL) -->
<div class="container book-list mt-3">

    <div class="book-card">
        <img src="boyfriend.png">
        <div>
            <strong>The Boyfriend</strong><br>
            <small>Freida McFadden</small>
        </div>
    </div>

    <div class="book-card">
        <img src="Iron_Flame_Cover_Art.jpg">
        <div>
            <strong>Iron Flame</strong><br>
            <small>Rebecca Yarros</small>
        </div>
    </div>

    <div class="book-card">
        <img src="murakami.webp">
        <div>
            <strong>The City and Its Uncertain Walls</strong><br>
            <small>Haruki Murakami</small>
        </div>
    </div>

    <div class="book-card">
        <img src="cityofnights.jpg">
        <div>
            <strong>City of Night Birds</strong><br>
            <small>Juhea Kim</small>
        </div>
    </div>

</div>

<!-- SPODNJA NAVIGACIJA -->
<div class="bottom-nav d-flex justify-content-around align-items-center">
    <a href="home.php" class="active">🏠</a>
    <a href="library.php">📚</a>
    <a href="pen.php">✏️</a>
    <a href="profile.php">👤</a>
</div>

</body>
</html>
