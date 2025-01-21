<?php
// Mengimpor koneksi
include 'db_connection.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nomor_telpon = $_POST['nomor_telpon'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$keterangan = $_POST['keterangan'];

// Menyiapkan query SQL untuk memasukkan data
$sql = "INSERT INTO siswa (nis, nama, alamat, jenis_kelamin, tanggal_lahir, nomor_telpon, email, kelas, jurusan, keterangan) 
        VALUES ('$nis', '$nama', '$alamat', '$jenis_kelamin', '$tanggal_lahir', '$nomor_telpon', '$email', '$kelas', '$jurusan', '$keterangan')";

// Mengeksekusi query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
    header("Location: ../pages/dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>