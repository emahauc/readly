<?php
// Only call session_start if one hasn't been started yet
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




?>