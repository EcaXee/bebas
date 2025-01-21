<?php
// Include database connection
include '../elearning/proses/db_connection.php'; // Sesuaikan nama file koneksi Anda

// Get the record ID (NIP) from URL or request
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to fetch data
    $query = "SELECT * FROM guru WHERE nip";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if data is found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "NIP tidak diberikan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Update Data</h2>
    <form action="../elearning/proses/edit_guru.php" method="POST">
        <!-- Hidden Input for NIP -->
        <input type="hidden" id="nip" name="nip" value="<?php echo $row['nip']; ?>">

        <!-- Nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" readonly>
        </div>

        <!-- Alamat -->
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?php echo $row['alamat']; ?></textarea>
        </div>

        <!-- Jenis Kelamin -->
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki" <?php echo ($row['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo ($row['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
            </select>
        </div>

        <!-- Tanggal Lahir -->
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required>
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-3">
            <label for="nomor_telpon" class="form-label">Nomor Telepon</label>
            <input type="tel" class="form-control" id="nomor_telpon" name="nomor_telpon" value="<?php echo $row['nomor_telpon']; ?>" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        </div>

        <!-- Keterangan -->
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

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
