<?php
// Mengimpor koneksi
include 'db_connection.php';

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama_mapel = $_POST['nama_mapel'];
    $nama_guru = $_POST['nama_guru'];
    $kelas_id = $_POST['kelas_id'];
    $jurusan_id = $_POST['jurusan_id'];
    $deskripsi_mapel = $_POST['deskripsi_mapel'];
    $gambar_mapel = $_POST['gambar_mapel'];

    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO mapel (nama_mapel, nama_guru, kelas, jurusan, deskripsi_mapel, gambar_mapel) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Menyiapkan pernyataan dan mengikat parameter
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nama_mapel, $nama_guru, $kelas_id, $jurusan_id, $deskripsi_mapel, $gambar_mapel);

    // Menjalankan pernyataan SQL
    if ($stmt->execute()) {
        echo "Data berhasil disimpan.";
        header("Location: ../pages/manage_course.php");
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
}
?>
