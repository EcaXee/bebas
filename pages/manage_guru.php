<?php
include '../proses/db_connection.php';

$query = "SELECT guru.nama, guru.nip, guru.alamat, guru.email, guru.keterangan 
          FROM guru";
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
            <!-- GURU -->
            <div class="manage column">
                <div class="d-flex justify-content-between align-content-center">
                    <h4>GURU</h4>
                    <div class="right-button">
                        <a href="../pages/tambah_data_guru.html">
                            <button type="button">Tambah Data</button>
                        </a>
                        <a href="../pages/list_data_guru.php">
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
                        if ($result->num_rows > 0) {
                          // Output data dari setiap baris
                          while($row = $result->fetch_assoc()) {
                              echo "<tr>";?>
                              <td><a href="view_data.php?id=<?php echo $row['nip']; ?>" class="link-view" style="text-decoration: none; color: black;"><?php echo $row ['nip'] ?></td>
                              <?php
                              echo "<td>" . $row["nama"] . "</td>";
                              echo "<td>" . $row["alamat"] . "</td>";
                              echo "<td>" . $row["email"] . "</td>";
                              echo "<td>" . $row["keterangan"] . "</td>";
                              ?>
                              <?php
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
