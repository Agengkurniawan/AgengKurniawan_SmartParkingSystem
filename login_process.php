<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email' OR username='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password_from_db = $row["password"];
        
        if (password_verify($password, $hashed_password_from_db)) {
            echo "<script>alert('Login berhasil!')</script>";
        } else {
            echo "<script>alert('Password anda salah.')</script>";
        }
    } else {
        echo "<script>alert('Mohon maaf, Akun Anda belum terdaftar.')</script>";
    }
}

$conn->close();
?>
