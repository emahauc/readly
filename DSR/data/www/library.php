<?php
// library.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Knjižnica</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tvoj CSS (ključno!) -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* GLAVNI KARTON */
        .library-card {
            background: #efe6d3;
            border-radius: 24px;
            padding: 24px;
            max-width: 420px;
            margin: 0 auto;
            box-shadow: 0 6px 20px rgba(0,0,0,0.25);
        }

        /* GUMBI */
        .library-btn {
            display: block;
            width: 100%;
            padding: 16px;
            border-radius: 999px;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
            color: #3b2f1e;
            background: #d8c9ad;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .library-btn:nth-child(2) {
            background: #cfc0a5;
        }

        .library-btn:nth-child(3) {
            background: #c6b89a;
        }

        .library-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body class="app-bg">

<!-- ZGORNJI BAR -->
<div class="top-bar d-flex justify-content-between align-items-center px-3 py-2">
    <a href="home.php" class="text-decoration-none text-light fs-4">←</a>
    <span class="text-light fs-5">🔗</span>
</div>

<!-- VSEBINA -->
<div class="container pt-4 pb-5 text-center">

    <!-- ⬇️ ISTI RAZRED KOT V PROFIL / PISALO -->
    <h2 class="title text-center mb-4">Moja knjižnica</h2>

    <div class="library-card d-flex flex-column gap-3">

        <a href="wishlist.php" class="library-btn">
            Wishlist knjige
        </a>

        <a href="prebrane.php" class="library-btn">
            Prebrane knjige
        </a>

        <a href="shranjene.php" class="library-btn">
            Shranjene knjige
        </a>

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
