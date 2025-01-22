<?php
include 'db_connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $nama_materi = $_POST['nama_materi'];
    $mapel = $_POST['mapel'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $isi_materi = $_POST['isi_materi'];

    // Proses upload file
    if (isset($_FILES['file_materi'])) {
        $file_name = $_FILES['file_materi']['name'];
        $file_tmp = $_FILES['file_materi']['tmp_name'];
        $file_size = $_FILES['file_materi']['size'];
        $file_error = $_FILES['file_materi']['error'];

        if ($file_error === 0) {
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_new_name = uniqid('', true) . '.' . $file_ext;
            $file_destination = 'uploads/' . $file_new_name;

            if (move_uploaded_file($file_tmp, $file_destination)) {
                // Menyimpan data ke database
                $sql = "INSERT INTO materi (nama_materi, mapel, kelas, jurusan, isi_materi, file_materi)
                        VALUES ('$nama_materi', '$mapel', '$kelas', '$jurusan', '$isi_materi', '$file_new_name')";
                if (mysqli_query($conn, $sql)) {
                    echo "Materi berhasil ditambahkan.";
                    header("Location: ../pages/dashboard.html");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Gagal mengupload file.";
            }
        } else {
            echo "Terjadi error saat mengupload file.";
        }
    }
}
?>
