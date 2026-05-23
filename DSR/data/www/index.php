<?php
ob_start();
include 'header.php';
require 'databaseconnection.php';
echo 'index line 4';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST["mail"];
    $geslo = $_POST["geslo"];
    echo 'index line 8';

    // We select the ID as well so we can store it in the session
    $stmt = $conn->prepare("SELECT id, geslo FROM uporabnik WHERE mail = :mail");
    $stmt->bindParam(":mail", $mail);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo 'index line 15';
    echo $mail;
    echo $geslo;
    echo $result["geslo"];
    echo '<br>';
    echo password_verify($geslo, $result["geslo"]);
    echo 'line 23';

    if (password_verify($geslo, $result["geslo"])) {

        $_SESSION['user_id'] = $result['id'];
        $_SESSION['uporabnik'] = $mail;

        header("Location: home.php");
        echo 'prijava dela';
        exit;
    } else {
        $error = "Invalid username or password.";
        echo $error;
    }
}

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
        <form id="loginForm" method = "POST">

            <div class="mb-3">
                <input 
                    type="email" 
                    id="mail"
                    name="mail"
                    class="form-control login-input"
                    placeholder="e-mail"
                >
            </div>

            <div class="mb-4">
                <input 
                    type="password" 
                    id="geslo"
                    name="geslo"
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



</body>
</html>
