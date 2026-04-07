<?php
// klubi.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <title>Knjižni klubi</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tvoj CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="app-bg">

<div class="container pt-4 pb-5">

  <!-- NASLOV -->
  <h2 class="title text-center mb-4">Knjižni klubi</h2>

  <!-- KLUBI -->
  <div class="calendar-box p-4">

    <!-- ROMANTIČNI -->
    <a href="romanticni_klub.php"
       class="club-card d-block text-center mb-3"
       style="background-color:#f1a7c1;">
      Romantični klub
    </a>

    <!-- FANTAZIJSKI -->
    <a href="#"
       class="club-card d-block text-center mb-3"
       style="background-color:#9fd9b3;">
      Fantazijski klub
    </a>

    <!-- TRILER -->
    <a href="#"
       class="club-card d-block text-center"
       style="background-color:#f29b9b;">
      Triler klub
    </a>

  </div>

</div>

<!-- SPODNJA NAVIGACIJA -->
<div class="bottom-nav d-flex justify-content-around align-items-center">
  <a href="home.php">🏠</a>
  <a href="library.php">📚</a>
  <a href="pen.php">✏️</a>
  <a href="profile.php">👤</a>
</div>

</body>
</html>
