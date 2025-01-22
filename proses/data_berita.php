<?php
include 'db_connection.php';
// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses simpan berita
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $judul_berita = $_POST['judul_berita'];
    $isi_berita   = $_POST['isi_berita'];

    // Proses upload gambar
    $target_dir = "../asset/berita/"; // Folder untuk menyimpan gambar
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa apakah file adalah gambar
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }

    // Periksa ukuran file (maksimal 2MB)
    if ($_FILES["gambar"]["size"] > 2000000) {
        echo "Ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Batasi tipe file gambar
    if (!in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
        echo "Hanya file JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Jika semua validasi berhasil
    if ($uploadOk === 1) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Simpan data berita ke database
            $gambar = basename($_FILES["gambar"]["name"]);
            $sql = "INSERT INTO berita (judul_berita, gambar, isi_berita) 
                    VALUES ('$judul_berita', '$gambar', '$isi_berita')";

            if ($conn->query($sql) === TRUE) {
                echo "Berita berhasil disimpan.";
                header("Location: ../pages/manage_forum.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Gagal mengunggah file gambar.";
        }
    }
}

// Tutup koneksi
$conn->close();
?>
