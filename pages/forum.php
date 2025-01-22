<?php
include '../proses/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Course List</title>
  <link rel="stylesheet" href="../asset/css/forum.css" />
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
    <div class="mapel">
      <div class="container">
        <!-- Forum Berita -->
        <div class="kelas d-flex flex-row border-bottom pb-2">
          <h4>Forum Berita</h4>
        </div>
        <div class="mapel-list">
          <div class="container">
            <?php
            // Ambil data berita terbaru dari database
            $query = mysqli_query($conn, "SELECT * FROM berita ORDER BY created_at DESC");
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <div class="subject d-flex fle border-bottom">
                <img src="../asset/berita/<?php echo $row['gambar']; ?>" alt="" />
                <div class="subject-detail">
                  <div class="text">
                    <h4><a href="berita.php?id=<?php echo $row['id_berita']; ?>"><?php echo $row['judul_berita']; ?></a></h4>
                    <p><?php echo $row['isi_berita']; ?></p>
                  </div>
                  <div class="date-news">
                    <p><?php echo $row['created_at']; ?></p>
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