<?php
session_start();

if (isset($_GET['MovieName'])) {
    $_SESSION['MovieName'] = $_GET['MovieName'];
    header("Location: biletaria.html");
}
?>