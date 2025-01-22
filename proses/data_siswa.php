<?php
include '../proses/db_connection.php';

// Pastikan semua data POST tersedia
if (
    isset($_POST['nis']) &&
    isset($_POST['nama']) &&
    isset($_POST['alamat']) &&
    isset($_POST['jenis_kelamin']) &&
    isset($_POST['tanggal_lahir']) &&
    isset($_POST['nomor_telpon']) &&
    isset($_POST['email']) &&
    isset($_POST['kelas_id']) &&
    isset($_POST['jurusan_id'])
) {
    // Tangkap data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nomor_telpon = $_POST['nomor_telpon'];
    $email = $_POST['email'];
    $kelas_id = $_POST['kelas_id'];
    $jurusan_id = $_POST['jurusan_id'];

    // Validasi apakah kelas dan jurusan valid di database
    $kelasCheck = $conn->query("SELECT id FROM kelas WHERE id = '$kelas_id'");
    $jurusanCheck = $conn->query("SELECT id FROM jurusan WHERE id = '$jurusan_id'");

    if ($kelasCheck->num_rows > 0 && $jurusanCheck->num_rows > 0) {
        // Query insert data siswa
        $query = "INSERT INTO siswa 
                  (nis, nama, alamat, jenis_kelamin, tanggal_lahir, nomor_telpon, email, kelas_id, jurusan_id) 
                  VALUES 
                  ('$nis', '$nama', '$alamat', '$jenis_kelamin', '$tanggal_lahir', '$nomor_telpon', '$email', '$kelas_id', '$jurusan_id')";

        if ($conn->query($query)) {
            echo "Data berhasil ditambahkan!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: Kelas atau Jurusan tidak valid!";
    }
} else {
    echo "Error: Data tidak lengkap!";
    var_dump($_POST); // Debugging tambahan
}

// Tutup koneksi
$conn->close();
?>
