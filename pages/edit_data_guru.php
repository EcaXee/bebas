<?php
include "../proses/db_connection.php";

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = mysqli_query($conn, "SELECT * FROM guru WHERE nip = '$id'");

    if ($query && mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
    } else {
        // Jika tidak ada data yang ditemukan
        echo "<script>alert('Data tidak ditemukan!'); window.location.href='../pages/dashboard.php';</script>";
        exit();
    }
} else {
    // Jika parameter ID tidak diberikan
    echo "<script>alert('ID tidak valid!'); window.location.href='../pages/dashboard.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Guru - SMK BUMIGORA</title>
    <link rel="stylesheet" href="../asset/css/edit_data.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <div id="Navbar"></div>

    <!-- Main Section -->
    <main>
        <div class="container">
            <div class="dashboard">
                <h2>Edit Data Guru</h2>
                <div class="manage column">
                    <form action="../proses/edit_guru.php" method="POST">
                        <input type="hidden" id="nip" name="nip" value="<?php echo $row['nip']; ?>">
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?php echo $row['alamat']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="Laki-laki" <?php echo ($row['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
                                <option value="Perempuan" <?php echo ($row['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="nomor_telpon" class="form-label">Nomor Telpon</label>
                            <input type="tel" class="form-control" id="nomor_telpon" name="nomor_telpon" pattern="[0-9]{10,13}" value="<?php echo $row['nomor_telpon']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="keterangan" id="keterangan1" value="Tetap" <?php echo ($row['keterangan'] == 'Tetap' ? 'checked' : ''); ?> required>
                                <label class="form-check-label" for="keterangan1">Tetap</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="keterangan" id="keterangan2" value="Tidak Tetap" <?php echo ($row['keterangan'] == 'Tidak Tetap' ? 'checked' : ''); ?> required>
                                <label class="form-check-label" for="keterangan2">Tidak Tetap</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div id="Footer"></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/navbar.js"></script>
    <script src="../asset/js/footer.js"></script>
</body>
</html>
