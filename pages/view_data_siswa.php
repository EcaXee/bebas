<?php
include '../proses/db_connection.php';

$query = "SELECT siswa.nama, siswa.nis, siswa.alamat, siswa.jenis_kelamin, siswa.tanggal_lahir, siswa.nomor_telpon, siswa.email, kelas.nama_kelas, jurusan.nama_jurusan 
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
    <link rel="stylesheet" href="../asset/css/view_data.css" />
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
            <!-- Siswa -->
            <div class="card mt-4 mb-5">
                <div class="card-header">
                    <h3>Detail Data</h3>
                </div>
                <div class="card-body">
                <?php
                        if ($result->num_rows > 0) {
                          // Output data dari setiap baris
                          while($row = $result->fetch_assoc()) {
                            ?>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['nama']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['nis']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['alamat']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['jenis_kelamin']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['tanggal_lahir']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nomor Telpon</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['nomor_telpon']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['email']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['nama_kelas']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo $row['nama_jurusan']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
                          }
                      } else {
                          echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
                      }
          
                      $conn->close();
                      ?>
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
