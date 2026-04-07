<?php
// romanticni_klub.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <title>Romantični klub</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tvoj CSS -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    .club-card {
      background: #efe6d3;
      border-radius: 24px;
      padding: 20px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.25);
      max-width: 420px;
      margin: 0 auto;
    }

    .book-box {
      background: #e2d7c1;
      border-radius: 18px;
      padding: 16px;
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .book-box img {
      width: 70px;
      border-radius: 8px;
    }

    .location-box {
      background: #d6cbb4;
      border-radius: 16px;
      padding: 14px;
      margin-top: 16px;
      cursor: pointer;
      transition: background 0.2s ease;
      text-decoration: none;
      display: block;
      color: inherit;
    }

    .location-box:hover {
      background: #cbbfa6;
    }

    .location-box small {
      color: #4a3b28;
    }
  </style>
</head>

<body class="app-bg">

<!-- ZGORNJI BAR -->
<div class="top-bar d-flex justify-content-between align-items-center px-3 py-2">
  <a href="klubi.php" class="text-decoration-none text-light fs-4">←</a>
  <span class="text-light fs-5">🔗</span>
</div>

<!-- VSEBINA -->
<div class="container pt-4 pb-5 text-center">

  <h2 class="title mb-4">Romantični klub</h2>

  <div class="club-card">

    <!-- KNJIGA -->
    <div class="book-box mb-3">
      <img
        src="images.jpeg"
        alt="Great Big Beautiful Life"
      >
      <div class="text-start">
        <strong>Great Big Beautiful Life</strong><br>
        <small>Emily Henry</small>
      </div>
    </div>

    <!-- LOKACIJA – DIREKTNI LINK -->
    <a
      href="https://maps.app.goo.gl/FGkfQ9PXuUxb729cA"
      target="_blank"
      class="location-box"
    >
      📍 <strong>Lokacija knjižnega kluba</strong><br>
      <small>
        UKM – Univerzitetna knjižnica Maribor<br>
        Gospejna ulica 10<br>
        Klikni za ogled na zemljevidu
      </small>
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
