<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - SMK BUMIGORA</title>
    <link rel="stylesheet" href="../asset/css/list_data.css" />
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
            <h2>Dashboard</h2>
            <!-- GURU -->
            <div class="manage column">
                <div class="d-flex justify-content-between align-content-center">
                    <h4>GURU</h4>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari NIP" aria-label="Cari">
                        <button class="btn btn-outline-dark" type="submit">Cari</button>
                    </form>
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
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        
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
                                  echo "<tr>";?>
                                  <td><a href="view_data.php?id=<?php echo $row['nip']; ?>" class="link-view"><?php echo $row ['nip'] ?></td>
                                  <?php
                                  echo "<td>" . $row["nama"] . "</td>";
                                  echo "<td>" . $row["alamat"] . "</td>";
                                  echo "<td>" . $row["email"] . "</td>";
                                  echo "<td>" . $row["keterangan"] . "</td>";
                                  ?>
                                  <td>
                                   <a href="edit_data_guru.php?id=<?php echo $row['nip']; ?>">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                   <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                   </svg>
                                  </a>
                                  </td>


                            <td><a href="../proses/hapus_guru.php?id=<?php echo $row ['nip']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg></a></td>
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
