<?php
include '../proses/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - SMK BUMIGORA</title>
    <link rel="stylesheet" href="../asset/css/manage_forum.css" />
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
      <div id="Side_bar">
      </div>
      <div class="container">
        <div class="dashboard">
          <h2>Dashboard</h2>
          <!-- GURU -->
          <div class="manage column">
            <div class="d-flex justify-content-between align-content-center">
              <h4>Course</h4>
              <div class="right-button">
                
                <a href="../pages/tambah_data_mapel.php">
                  <button type="button">Tambah Data</button>
                </a>
              </div>
            </div>
            <div class="list d-flex justify-content-center">
              <div class="container">
                <div class="subject border-bottom pb-2">
                <?php
                    // Ambil data berita terbaru dari database
                    $query = mysqli_query($conn, "SELECT * FROM mapel ORDER BY created_at DESC");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                  <div class="d-flex justify-content-between">
                    <div>
                    <h5><a href="course_list.php?id=<?php echo $row['id_mapel']; ?>"><?php echo $row['nama_mapel']; ?></a></h5>
                      <div class="detail d-flex flex-row">
                        <p><?php echo $row['nama_guru']; ?></p>
                        <p>kelas</p>
                        <p><?php echo $row['kelas']; ?></p>
                        <p><?php echo $row['jurusan']; ?></p>
                      </div>
                    </div>
                    <div>
                      <a href="">hapus</a>
                    </div>
                  </div>
                </div>
                <?php
                    }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="../asset/js/navbar.js"></script>
    <script src="../asset/js/sidebar_admin.js"></script>
  </body>
</html>