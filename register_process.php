<?php
// Konfigurasi database
$host = 'localhost';
$dbname = 'your_database_name'; // Ganti dengan nama database Anda
$dbuser = 'root'; // Ganti dengan username database Anda
$dbpass = ''; // Ganti dengan password database Anda

try {
    // Koneksi ke database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validasi password
        if ($password !== $confirm_password) {
            echo "<script>alert('Password dan Konfirmasi Password tidak cocok!'); window.location.href='register.php';</script>";
            exit();
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database
        $stmt = $conn->prepare("INSERT INTO users (username, phone, email, password) VALUES (:username, :phone, :email, :password)");
        $stmt->bindParam(':username', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan!'); window.location.href='register.php';</script>";
        }
    }
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
