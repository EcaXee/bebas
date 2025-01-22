<?php
session_start();

// Cek apakah session role sudah diset dan sesuai untuk siswa
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'siswa') {
    header("Location: login.html");
    exit();
}
?>
