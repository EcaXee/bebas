<?php
// Menyertakan file koneksi database
include 'db_connection.php';

// Memastikan data diterima
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nomor_telpon = $_POST['nomor_telpon'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];

    // Query untuk update data guru
    $query = "UPDATE guru SET 
                nama = '$nama', 
                alamat = '$alamat', 
                jenis_kelamin = '$jenis_kelamin', 
                tanggal_lahir = '$tanggal_lahir', 
                nomor_telpon = '$nomor_telpon', 
                email = '$email', 
                keterangan = '$keterangan' 
              WHERE nip = '$nip'";

    // Menjalankan query
    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman guru atau halaman lain setelah update berhasil
        header("Location: ../pages/list_data_guru.php");
        exit();
    } else {
        // Menampilkan pesan error jika query gagal
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Menutup koneksi
mysqli_close($conn);
?>
