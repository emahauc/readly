<?php
// home.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <title>Readly – Home</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tvoj CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="app-bg">

<!-- ZGORNJI DEL -->
<div class="top-bar px-3 py-2">

  <!-- ⬇️ ISTA PISAVA KOT PROFIL / PISALO -->
  <h2 class="title text-center mb-3">
    Najbolj brane knjige ta teden
  </h2>

  <!-- SEARCH BAR -->
  <form action="search.php" method="get">
    <input
      type="text"
      name="q"
      class="form-control search-input"
      placeholder="Išči knjige..."
    >
  </form>
</div>

<!-- SEZNAM KNJIG (SCROLL) -->
<div class="container book-list mt-3 pb-5">

  <a href="book.php" class="book-card text-decoration-none">
    <img src="boyfriend.png">
    <div>
      <strong>The Boyfriend</strong><br>
      <small>Freida McFadden</small>
    </div>
  </a>

  <a href="book.php" class="book-card text-decoration-none">
    <img src="Iron_Flame_Cover_Art.jpg">
    <div>
      <strong>Iron Flame</strong><br>
      <small>Rebecca Yarros</small>
    </div>
  </a>

  <a href="book.php" class="book-card text-decoration-none">
    <img src="murakami.webp">
    <div>
      <strong>The City and Its Uncertain Walls</strong><br>
      <small>Haruki Murakami</small>
    </div>
  </a>

  <!-- ponovitev za scroll -->
  <a href="book.php" class="book-card text-decoration-none">
    <img src="boyfriend.png">
    <div>
      <strong>The Boyfriend</strong><br>
      <small>Freida McFadden</small>
    </div>
  </a>

  <a href="book.php" class="book-card text-decoration-none">
    <img src="Iron_Flame_Cover_Art.jpg">
    <div>
      <strong>Iron Flame</strong><br>
      <small>Rebecca Yarros</small>
    </div>
  </a>

  <a href="book.php" class="book-card text-decoration-none">
    <img src="murakami.webp">
    <div>
      <strong>The City and Its Uncertain Walls</strong><br>
      <small>Haruki Murakami</small>
    </div>
  </a>

</div>

<!-- SPODNJI BAR -->
<div class="bottom-nav d-flex justify-content-around align-items-center">
  <a href="home.php" class="active">🏠</a>
  <a href="library.php">📚</a>
  <a href="pen.php">✏️</a>
  <a href="profile.php">👤</a>
</div>

</body>
</html>
