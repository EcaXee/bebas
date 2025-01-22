<?php
// Mengimpor koneksi
include 'db_connection.php';

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nomor_telpon = $_POST['nomor_telpon'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];

    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO guru (nip, nama, alamat, jenis_kelamin, tanggal_lahir, nomor_telpon, email, keterangan) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $nip, $nama, $alamat, $jenis_kelamin, $tanggal_lahir, $nomor_telpon, $email, $keterangan);

    // Menjalankan pernyataan SQL
    if ($stmt->execute()) {
        echo "Data berhasil disimpan.";
        header("Location: ../pages/manage_guru.php");
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../asset/css/manage_user.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
<body>
    <div>
        <a href="../pages/manage_guru.php">
            <button type="button" class="btn btn-primary m-6">Kembali</button>
        </a>
    </div>
</body>
</html>
