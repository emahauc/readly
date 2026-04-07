<?php
// pen.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <title>Pisalo</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tvoj CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="app-bg">

<div class="container pt-4 pb-5">

  <!-- NASLOV (isti stil kot profil) -->
  <h2 class="title text-center mb-4">Pisalo</h2>

  <!-- IZBIRA (v istem "box" stilu kot koledar/profil) -->
  <div class="calendar-box p-4">

    <a href="klubi.php" class="category-btn d-block text-center mb-3">
      📖 Knjižni klubi
    </a>

    <a href="komentarji.php" class="category-btn d-block text-center">
      💬 Komentarji
    </a>

  </div>

</div>

<!-- SPODNJA NAVIGACIJA -->
<div class="bottom-nav d-flex justify-content-around align-items-center">
  <a href="home.php">🏠</a>
  <a href="library.php">📚</a>

  <!-- AKTIVNO -->
  <a href="pen.php" class="active">✏️</a>
  <a href="profile.php">👤</a>
</div>

</body>
</html>
