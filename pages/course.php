<?php
include '../proses/session_siswa.php';
include '../proses/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - SMK BUMIGORA</title>
    <link rel="stylesheet" href="../asset/css/course.css" />
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
      <div class="mapel">
        <div class="container">
          <!-- Keterangan Kelas dan Semester -->
          <div class="ket-kelas  d-flex flex-row justify-content-between border-bottom pb-2">
            <div class="kelas d-flex flex-row">
              <h4>Kelas 3</h4>
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
              <?php
                                $kelasQuery = "SELECT id, nama_kelas FROM kelas";
                                $kelasResult = $conn->query($kelasQuery);
                                if ($kelasResult->num_rows > 0) {
                                    while ($row = $kelasResult->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nama_kelas'] . "</option>";
                                    }
                                }
                                ?>
              </ul>
            </div>
            <div class="semester d-flex flex-row">
              <h4>jurusan</h4>
            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li>
            <?php
                                $jurusanQuery = "SELECT id, nama_jurusan FROM jurusan";
                                $jurusanResult = $conn->query($jurusanQuery);
                                if ($jurusanResult->num_rows > 0) {
                                    while ($row = $jurusanResult->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nama_jurusan'] . "</option>";
                                    }
                                }
                                ?>
                                </li>
            </ul>
            </div>
          </div>
          
          <!-- Mata Pelajaran -->
          <div class="mapel-list d-flex flex-row justify-content-between">
            <div class="container text-center">
              <div class="row">
                <!-- card 1 -->
                <div class="mapel-card col">
                  <div class="col d-flex justify-content-center">
                    <a href="course_list.html">
                      <div class="card">
                        <img src="../asset/Screenshot (304).png" alt="Judul Berita" />
                        <div class="overlay">
                          <?php
                        $query = mysqli_query($conn, "SELECT * FROM mapel");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                          <h5><?php echo $row ['deskripsi_mapel']; ?></<h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <p><?php echo $row ['nama_mapel']; ?></</p>
                </div>
               <?php
            }
            ?>
                <!-- batas card (debugging) -->
              </div>
            </div>
          </div>
          <!-- batas div mapel list -->
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
    ></script>
    <script src="../asset/js/navbar.js"></script>
    <script src="../asset/js/footer.js"></script>
  </body>
</html>
