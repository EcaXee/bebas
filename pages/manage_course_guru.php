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
      <div id="Sidebar_guru"></div>
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
                    <a href="../proses/hapus_course.php?id=<?php echo $row ['id_mapel']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                      </svg></a>
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
    <script src="../asset/js/sidebar_guru.js"></script>
  </body>
</html>
