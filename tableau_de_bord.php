<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_signup.html");
    exit();
}

echo "<h1>Bienvenue, " . $_SESSION['username'] . "!</h1>";
echo "<p><a href='login_signup.php'>Se déconnecter</a></p>";
