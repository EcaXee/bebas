<?php
session_start();
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Hash password menggunakan SHA-1
    $hashed_password = sha1($password);

    // Query untuk mendapatkan data pengguna berdasarkan username dan hashed password
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Set session dan redirect berdasarkan role
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        switch ($user['role']) {
            case 'admin':
                header("Location: ../pages/dashboard.html");
                break;
            case 'user':
                header("Location: ../pages/home.html");
                break;
            case 'siswa':
                header("Location: ../pages/course.html");
                break;
            default:
                echo "Role tidak dikenali.";
        }
    } else {
        echo "Username atau password salah.";
    }
} else {
    echo "Invalid request method.";
}
?>
