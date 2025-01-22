<?php
include '../proses/db_connection.php';

$query = "SELECT siswa.nama, siswa.nis, kelas.nama_kelas, jurusan.nama_jurusan 
          FROM siswa 
          JOIN kelas ON siswa.kelas_id = kelas.id 
          JOIN jurusan ON siswa.jurusan_id = jurusan.id";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - SMK BUMIGORA</title>
    <link rel="stylesheet" href="../asset/css/manage_user.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>

    <!-- Main Section -->
    <main>
        <!-- Sidebar -->
        <div id="Side_bar"></div>
      <div class="container">
        <div class="dashboard">
            <h2>Dashboard</h2>
            <!-- SISWA -->
            <div class="manage column">
                <div class="d-flex justify-content-between align-content-center">
                    <h4>SISWA</h4>
                    <div class="right-button">
                        <a href="../pages/tambah_data_siswa.php">
                        <button type="button">Tambah Data</button>
                        </a>
                        <a href="../pages/list_data_siswa.php">
                            <button type="button">Edit</button>
                        </a>
                    </div>
                </div>
                <div class="list d-flex justify-content-center">
                   <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>" . $row['nama'] . "</td>
                                            <td>" . $row['nis'] . "</td>
                                            <td>" . $row['nama_kelas'] . "</td>
                                            <td>" . $row['nama_jurusan'] . "</td>
                                          </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>Tidak ada data siswa</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    >
    </script>
    <script src="../asset/js/navbar.js"></script>
    <script src="../asset/js/sidebar_admin.js"></script>
  </body>
</html>