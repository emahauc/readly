<?php
// profile.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <title>Profil</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="app-bg">

<div class="container pt-4 pb-5">

  <!-- NASLOV -->
  <h2 class="title text-center mb-3">Profil</h2>

  <!-- KROŽNI GRAF -->
  <div class="text-center mb-4">

    <div class="progress-circle" id="progressCircle">
      <div class="circle-text" id="circleText"></div>
    </div>

    <small style="color:#f1f1f1;">Prebrane knjige v letu</small>

    <!-- + / - GUMBA -->
    <div class="d-flex justify-content-center gap-3 mt-2">
      <button class="btn btn-sm btn-light" id="minusBook">−</button>
      <button class="btn btn-sm btn-light" id="plusBook">+</button>
    </div>

  </div>

  <!-- KOLEDAR -->
  <div class="calendar-box mb-3">
    <h5 class="text-center mb-2">Januar 2026</h5>

    <div class="calendar-grid" id="calendarGrid"></div>

    <p class="text-center mt-2 streak-text" id="dayCount">
      Označeni dnevi: <strong>0</strong>
    </p>
  </div>

  <!-- IZPIS NA DNU -->
  <div class="text-center mt-5">
    <a href="index.php" class="btn logout-btn">Izpis</a>
  </div>

 represented  
</div>

<!-- ================= JAVASCRIPT ================= -->

<script>
/* ===== PODATKI ===== */

// letni cilj
const yearlyGoal = 40;
let booksRead = 12;

// koledar
const totalDays = 31;

/* ===== ELEMENTI ===== */

const circle = document.getElementById("progressCircle");
const text = document.getElementById("circleText");
const plusBtn = document.getElementById("plusBook");
const minusBtn = document.getElementById("minusBook");

const calendarGrid = document.getElementById("calendarGrid");
const dayCountText = document.getElementById("dayCount");

/* ===== KROŽNI GRAF ===== */

function updateGraph() {
  const percent = Math.round((booksRead / yearlyGoal) * 100);

  circle.style.background = `
    conic-gradient(
      #8b6f2d 0deg ${percent * 3.6}deg,
      #e6dfc8 ${percent * 3.6}deg 360deg
    )
  `;

  text.innerHTML = `
    ${booksRead} / ${yearlyGoal}<br>
    <small>knjig</small>
  `;
}

/* ===== GUMBA + / - ===== */

plusBtn.addEventListener("click", () => {
  if (booksRead < yearlyGoal) {
    booksRead++;
    updateGraph();
  }
});

minusBtn.addEventListener("click", () => {
  if (booksRead > 0) {
    booksRead--;
    updateGraph();
  }
});

/* ===== KOLEDAR ===== */

function updateDayCount() {
  const selectedDays = document.querySelectorAll(".day.streak").length;
  dayCountText.innerHTML =
    `Označeni dnevi: <strong>${selectedDays}</strong>`;
}

for (let day = 1; day <= totalDays; day++) {
  const div = document.createElement("div");
  div.classList.add("day");

  const span = document.createElement("span");
  span.textContent = day;
  span.style.color = "#f1f1f1"; // številke vedno vidne

  div.appendChild(span);

  div.addEventListener("click", () => {
    div.classList.toggle("streak");
    updateDayCount();
  });

  calendarGrid.appendChild(div);
}

/* ===== ZAČETNI ZAGON ===== */

updateGraph();
</script>

</body>
</html>
