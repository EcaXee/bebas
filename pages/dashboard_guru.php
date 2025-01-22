<?php
include '../proses/session_guru.php';
include "../proses/db_connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
    $row = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - SMK BUMIGORA</title>
    <link rel="stylesheet" href="../asset/css/dashboard.css" />
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
        <!-- Sidebar -->
        <div class="sidebar">
            <h4>Admin</h4>
            <ul class="nav flex-column">
                <div class="menu">
                    <li class="nav-item">
                        <div class="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <p><?php echo $row["username"] ;?></p>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/manage_course_guru.html">
                            mapel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/manage_materi.html">
                            materi/tugas
                        </a>
                    </li>
                </div>
                <div class="home">
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/home.html">
                            Home
                        </a>
                    </li>
                </div>
            </ul>
        </div>
        <div class="container">
            <div class="dashboard">
                <h2>Dashboard</h2>
                <div class="dashboard-content">
                    <div class="container d-flex flex-wrap">
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <script src="../asset/js/navbar.js"></script>
</body>

</html>