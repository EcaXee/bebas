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

        // Set session
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['id'] = $user['id'];

        // Redirect berdasarkan role dengan menyisipkan ID di URL
        switch ($user['role']) {
            case 'admin':
                header("Location: ../pages/dashboard.php?id=" . $user['id']);
                break;
            case 'guru':
                header("Location: ../pages/dashboard_guru.php?id=" . $user['id']);
                break;
            case 'siswa':
                header("Location: ../pages/course.php?id=" . $user['id']);
                break;
            default:
                echo "Role tidak dikenali.";
        }
        exit;
    } else {
        echo "Username atau password salah.";
    }
} else {
    echo "Invalid request method.";
}
?>
