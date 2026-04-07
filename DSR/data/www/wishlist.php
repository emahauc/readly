<?php
// wishlist.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <title>Wishlist</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    /* BELE IKONE */
    .icon-btn {
      color: white;
      font-size: 20px;
      text-decoration: none;
      background: none;
      border: none;
    }

    .sort-dropdown {
      position: absolute;
      right: 15px;
      top: 55px;
      background: #cfc5ae;
      border-radius: 12px;
      padding: 8px;
      display: none;
      z-index: 20;
    }

    .sort-dropdown button {
      background: none;
      border: none;
      width: 100%;
      text-align: left;
      padding: 6px;
    }

    /* KNJIGE */
    .book-card {
      display: flex;
      align-items: center;
      gap: 12px;
      background: #cfc5ae;
      border-radius: 18px;
      padding: 10px;
      margin-bottom: 12px;
    }

    .book-card img {
      width: 55px;
      border-radius: 8px;
    }
  </style>
</head>

<body class="app-bg">

<!-- ZGORNJI BAR -->
<div class="top-bar d-flex justify-content-between align-items-center px-3 py-2">
  <!-- PUŠČICA → NAZAJ NA LIBRARY -->
  <a href="library.php" class="icon-btn">←</a>

  <span class="text-white">Wishlist</span>

  <!-- SORT -->
  <button class="icon-btn" onclick="toggleSort()">⇅</button>
</div>

<!-- SORT MENI -->
<div id="sortMenu" class="sort-dropdown">
  <button onclick="sortBooks('title')">Po naslovu</button>
  <button onclick="sortBooks('author')">Po avtorju</button>
</div>

<!-- SEZNAM KNJIG -->
<div class="container pt-3 pb-5" id="bookList">

  <div class="book-card" data-title="The Boyfriend" data-author="Freida McFadden">
    <img src="boyfriend.png">
    <div>
      <strong>The Boyfriend</strong><br>
      <small>Freida McFadden</small>
    </div>
  </div>

  <div class="book-card" data-title="Iron Flame" data-author="Rebecca Yarros">
    <img src="Iron_Flame_Cover_Art.jpg">
    <div>
      <strong>Iron Flame</strong><br>
      <small>Rebecca Yarros</small>
    </div>
  </div>

  <div class="book-card" data-title="The City and Its Uncertain Walls" data-author="Haruki Murakami">
    <img src="cityofnights.jpg">
    <div>
      <strong>The City and Its Uncertain Walls</strong><br>
      <small>Haruki Murakami</small>
    </div>
  </div>

  <!-- ponovitve za scroll -->
  <div class="book-card" data-title="The Boyfriend" data-author="Freida McFadden">
    <img src="boyfriend.png">
    <div>
      <strong>The Boyfriend</strong><br>
      <small>Freida McFadden</small>
    </div>
  </div>

  <div class="book-card" data-title="Iron Flame" data-author="Rebecca Yarros">
    <img src="Iron_Flame_Cover_Art.jpg">
    <div>
      <strong>Iron Flame</strong><br>
      <small>Rebecca Yarros</small>
    </div>
  </div>

  <div class="book-card" data-title="The City and Its Uncertain Walls" data-author="Haruki Murakami">
    <img src="murakami.webp">
    <div>
      <strong>The City and Its Uncertain Walls</strong><br>
      <small>Haruki Murakami</small>
    </div>
  </div>

</div>

<!-- SPODNJI BAR -->
<div class="bottom-nav d-flex justify-content-around align-items-center">
  <a href="home.php">🏠</a>
  <a href="library.php" class="active">📚</a>
  <a href="pen.php">✏️</a>
  <a href="profile.php">👤</a>
</div>

<!-- JS -->
<script>
  const sortMenu = document.getElementById("sortMenu");
  const bookList = document.getElementById("bookList");

  function toggleSort() {
    sortMenu.style.display =
      sortMenu.style.display === "block" ? "none" : "block";
  }

  function sortBooks(type) {
    const books = Array.from(bookList.children);

    books.sort((a, b) =>
      a.dataset[type].localeCompare(b.dataset[type])
    );

    books.forEach(book => bookList.appendChild(book));
    sortMenu.style.display = "none";
  }
</script>

</body>
</html>
