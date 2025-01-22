<?php
// Menyertakan file koneksi database
include 'db_connection.php';

// Memastikan parameter id diterima melalui URL
if (isset($_GET['id'])) {
    // Mendapatkan nilai nip dari parameter URL
    $id_berita = $_GET['id'];

    // Query untuk menghapus data guru
    $query = "DELETE FROM berita WHERE id_berita = '$id_berita'";

    // Menjalankan query
    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman dashboard setelah penghapusan berhasil
        header("Location: ../pages/manage_forum.php?message=delete_success");
        exit();
    } else {
        // Menampilkan pesan error jika query gagal
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    // Jika parameter id tidak ditemukan, redirect kembali ke halaman dashboard
    header("Location: ../pages/manage_forum.php?message=delete_error");
    exit();
}

// Menutup koneksi
mysqli_close($conn);
?>
