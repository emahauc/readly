<?php
// komentarji.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <title>Komentarji</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="app-bg">

<div class="container pt-4 pb-5">

  <h2 class="title text-center mb-4">Komentarji</h2>

  <!-- SEZNAM KOMENTARJEV -->
  <div id="commentsList">

    <!-- KOMENTAR 1 -->
    <div class="comment-card mb-3">
      <p><strong>Bralec 1</strong></p>
      <p class="comment-text">Ta knjiga mi je bila všeč, ampak hkrati ne.</p>

      <div class="comment-actions">
        <button class="like-btn" onclick="like(this)">👍 <span>12</span></button>
        <button class="dislike-btn" onclick="dislike(this)">👎 <span>3</span></button>
      </div>
    </div>

    <!-- KOMENTAR 2 -->
    <div class="comment-card mb-3">
      <p><strong>Bralec 2</strong></p>
      <p class="comment-text">Zelo napeta zgodba, priporočam!</p>

      <div class="comment-actions">
        <button class="like-btn" onclick="like(this)">👍 <span>8</span></button>
        <button class="dislike-btn" onclick="dislike(this)">👎 <span>1</span></button>
      </div>
    </div>

  </div>

  <!-- OBRAZEC ZA KOMENTAR -->
  <form id="commentForm" class="comment-form mt-4">
    <label class="mb-2">Napiši komentar:</label>

    <textarea
      id="commentInput"
      class="form-control mb-3"
      rows="3"
      placeholder="Tvoj komentar..."
      required>
    </textarea>

    <button type="submit" class="btn app-btn w-100">
      Objavi!
    </button>
  </form>

</div>

<!-- SPODNJI NAVIGACIJSKI BAR -->
<div class="bottom-nav d-flex justify-content-around align-items-center">
  <a href="home.php">🏠</a>
  <a href="wishlist.php">📚</a>
  <a href="pen.php">✏️</a>
  <a href="profile.php">👤</a>
</div>

<!-- SIMPLE JAVASCRIPT -->
<script>
  const form = document.getElementById("commentForm");
  const input = document.getElementById("commentInput");
  const list = document.getElementById("commentsList");

  function like(button) {
    const span = button.querySelector("span");
    span.textContent = parseInt(span.textContent) + 1;
  }

  function dislike(button) {
    const span = button.querySelector("span");
    span.textContent = parseInt(span.textContent) + 1;
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const text = input.value.trim();
    if (text === "") return;

    const newComment = document.createElement("div");
    newComment.className = "comment-card mb-3";

    newComment.innerHTML = `
      <p><strong>Ti</strong></p>
      <p class="comment-text">${text}</p>

      <div class="comment-actions">
        <button class="like-btn" onclick="like(this)">👍 <span>0</span></button>
        <button class="dislike-btn" onclick="dislike(this)">👎 <span>0</span></button>
      </div>
    `;

    list.appendChild(newComment);
    input.value = "";
  });
</script>

</body>
</html>
