<?php
// Koneksi ke database
include '../proses/db_connection.php';

// Query untuk mengambil data
$sql = "SELECT alamat, jenis_kelamin, tanggal_lahir, nomor_telpon, email FROM guru";
$result = $conn->query($sql);

// Jika query gagal, tampilkan pesan error
if (!$result) {
    die("Query error: " . $conn->error);
}

// Menyimpan data dalam array untuk diteruskan ke tampilan
$guru_data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $guru_data[] = $row;
    }
}

// Tutup koneksi
$conn->close();
?>
