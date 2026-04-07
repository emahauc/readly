<?php
// index.php
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Readly – Prijava</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tvoj CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login-bg d-flex justify-content-center align-items-center vh-100">

    <div class="login-card text-center">

        <!-- Ikona -->
        <div class="mb-3">
            <span class="book-icon">📖</span>
        </div>

        <!-- Naslov -->
        <h1 class="app-title mb-4">Readly</h1>

        <!-- SPOROČILO O NAPAKI (skrito dokler ni potrebno) -->
        <p id="errorMsg" style="display:none; color:#b00020;">
            Prosimo, vnesi e-mail in geslo.
        </p>

        <!-- Forma (brez PHP) -->
        <form id="loginForm">

            <div class="mb-3">
                <input 
                    type="email" 
                    id="email"
                    class="form-control login-input"
                    placeholder="e-mail"
                >
            </div>

            <div class="mb-4">
                <input 
                    type="password" 
                    id="password"
                    class="form-control login-input"
                    placeholder="geslo"
                >
            </div>

            <!-- GUMB -->
            <button type="submit" class="btn login-btn w-100">
                Prijava
            </button>

        </form>

    </div>

<!-- SAMO FUNKCIONALNOST (JS) -->
<script>
    const form = document.getElementById("loginForm");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const errorMsg = document.getElementById("errorMsg");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        if (email.value.trim() === "" || password.value.trim() === "") {
            errorMsg.style.display = "block";
        } else {
            errorMsg.style.display = "none";
            window.location.href = "home.php";
        }
    });
</script>

</body>
</html>
