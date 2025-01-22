<?php
include '../proses/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - SMK BUMIGORA</title>
    <link rel="stylesheet" href="../asset/css/tambah_data.css" />
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
      <div class="container">
        <div class="dashboard">
            <h2>Tambah Mapel</h2>
            <!-- MAPEL -->
            <div class="manage column">
                <form action="../proses/data_materi.php" method="post">
                  <div class="mb-3">
                    <label for="nama_materi" class="form-label">Nama Materi</label>
                    <input type="text" class="form-control" id="nama_materi" name="nama_materi" required>
                </div>
                <div class="mb-3">
                    <label for="mapel" class="form-label">Mata Pelajaran</label>
                    <select class="form-select" id="mapel" name="mapel" required>
                        <!-- Options from database -->
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM mapel");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id_mapel'] . "'>" . $row['nama_mapel'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" id="kelas" name="kelas" required>
                        <!-- Options from database -->
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM kelas");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id_kelas'] . "'>" . $row['nama_kelas'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" id="jurusan" name="jurusan" required>
                        <!-- Options from database -->
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM jurusan");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id_jurusan'] . "'>" . $row['nama_jurusan'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="isi_materi" class="form-label">Isi Materi</label>
                    <textarea class="form-control" id="isi_materi" name="isi_materi" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="file_materi" class="form-label">Upload File</label>
                    <input type="file" class="form-control" id="file_materi" name="file_materi" accept="image/*" required>
                </div>
                  <button type="submit" class="btn btn-primary">upload</button>
                </form>
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
    ></script>
    <script src="../asset/js/navbar.js"></script>
    <script src="../asset/js/footer.js"></script>
  </body>
</html>
