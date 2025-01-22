<?php
session_start();

// Cek apakah session role sudah diset dan sesuai untuk guru
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'guru') {
    header("Location: login.html");
    exit();
}
?>
