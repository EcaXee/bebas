<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database
$password = "";     // Sesuaikan dengan password database
$dbname = "elearning"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
