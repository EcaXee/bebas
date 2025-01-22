<?php
include '../proses/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="../asset/css/tambah_data.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
</head>

<body>
    <!-- Navbar -->
    <div id="Navbar"></div>

    <!-- Main Section -->
    <main>
        <div class="container">
            <div class="dashboard">
                <h2>Tambah Data SISWA</h2>
                <div class="manage column">
                    <form action="../proses/data_siswa.php" method="post">
                        <div class="mb-3">
                            <label for="nis" class="form-label">Nis</label>
                            <input type="text" class="form-control" id="nis" name="nis" required />
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required />
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required />
                        </div>
                        <div class="mb-3">
                            <label for="nomor_telpon" class="form-label">Nomor Telpon</label>
                            <input type="tel" class="form-control" id="nomor_telpon" name="nomor_telpon" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" id="kelas_id" name="kelas_id" required>
                                <option value="">Pilih Kelas</option>
                                <?php
                                $kelasQuery = "SELECT id, nama_kelas FROM kelas";
                                $kelasResult = $conn->query($kelasQuery);
                                if ($kelasResult->num_rows > 0) {
                                    while ($row = $kelasResult->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nama_kelas'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" id="jurusan_id" name="jurusan_id" required>
                                <option value="">Pilih Jurusan</option>
                                <?php
                                $jurusanQuery = "SELECT id, nama_jurusan FROM jurusan";
                                $jurusanResult = $conn->query($jurusanQuery);
                                if ($jurusanResult->num_rows > 0) {
                                    while ($row = $jurusanResult->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nama_jurusan'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
        crossorigin="anonymous"></script>
    <script src="../asset/js/navbar.js"></script>
    <script src="../asset/js/footer.js"></script>
</body>

</html>
<?php $conn->close(); ?>