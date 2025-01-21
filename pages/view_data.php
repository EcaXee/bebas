<?php
include "../proses/db_connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM guru WHERE nip = '$id'");
    $row = mysqli_fetch_array($query);
}
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
            <!-- GURU -->
            <div class="card mt-4 mb-5">
                <div class="card-header">
                    <h3>Detail Data</h3>
                </div>
                <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">NIP</label>
             <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" name="nip" value="<?php echo $row['nip']; ?>" readonly>
             </div>
            </div>
             <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Nama</label>
             <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" name="nama" value="<?php echo $row['nama']; ?>" readonly>
             </div>
            </div>
             <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="alamat" value="<?php echo $row['alamat']; ?>" readonly>
    </div>
    </div>

    <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" readonly>
    </div>
    </div>

    <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" readonly>
    </div>
    </div>

    <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nomor Telpon</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="nomor_telpon" value="<?php echo $row['nomor_telpon']; ?>" readonly>
    </div>
    </div>

    <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="email" value="<?php echo $row['email']; ?>" readonly>
    </div>
    </div>

    <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="keterangan" value="<?php echo $row['keterangan']; ?>" readonly>
    </div>
    </div>

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
    ></script>
    <script src="../asset/js/navbar.js"></script>
    <script src="../asset/js/footer.js"></script>
  </body>
</html>
