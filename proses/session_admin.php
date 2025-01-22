<?php
session_start();

// Cek apakah session role sudah diset dan sesuai untuk admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: login.html");
    exit();
}
?>
