<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - SMK BUMIGORA</title>
    <link rel="stylesheet" href="../asset/css/dashboard.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Navbar -->
    <div id="Navbar"></div>

    <!-- Main Section -->
    <main>
        <!-- Sidebar -->
        <div class="sidebar">
            <h4>Admin</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <div class="profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                        <p>nama</p>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Guru
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Siswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Forum
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Course
                    </a>
                </li>
            </ul>
        </div>
      <div class="container">
        <div class="dashboard">
            <h2>Dashboard</h2>
            <!-- GURU -->
            <div class="manage column">
                <div class="d-flex justify-content-between align-content-center">
                    <h4>GURU</h4>
                    <div class="right-button">
                        <a href="/pages/tambah_data_guru.html">
                            <button type="button">Tambah Data</button>
                        </a>
                        <a href="list_data_guru.php">
                            <button type="button">Edit</button>
                        </a>
                    </div>
                </div>
                <div class="list d-flex justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tbody>
                            <?php
                            include '../proses/db_connection.php';

                            $sql = "SELECT * FROM guru";
                            $result = $conn->query($sql);
                            if ($conn->connect_error) {
                                die("Koneksi gagal: " . $conn->connect_error);
                            }
                
                            $sql = "SELECT * FROM guru";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Output data dari setiap baris
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["nip"] . "</td>";
                                    echo "<td>" . $row["nama"] . "</td>";
                                    echo "<td>" . $row["alamat"] . "</td>";
                                    echo "<td>" . $row["email"] . "</td>";
                                    echo "<td>" . $row["keterangan"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
                            }
                
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SISWA -->
            <div class="manage column">
                <div class="d-flex justify-content-between align-content-center">
                    <h4>SISWA</h4>
                    <div class="right-button">
                        <a href="../pages/tambah_data_siswa.html">
                        <button type="button">Tambah Data</button>
                        </a>
                        <a href="list_data_siswa.html">
                            <button type="button">Edit</button>
                        </a>
                    </div>
                </div>
                <div class="list d-flex justify-content-center">
                   <!-- <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        </tbody>
                        <tbody>
                           
                            // Menutup koneksi
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                    !-->
                </div>
            </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
     <footer>
      <div id="Footer"></div>
     </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    >
    </script>
    <script src="../asset/js/navbar.js"></script>
    <script src="../asset/js/footer.js"></script>
  </body>
</html>
