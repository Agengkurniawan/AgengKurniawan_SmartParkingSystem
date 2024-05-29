<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', $password)) {
        echo "<script>alert('Mohon maaf, Password harus mengandung huruf, angka, dan simbol. Panjang minimal 8 karakter.')</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Harap masukkan confirm password yang sama dengan password!!')</script>";
    } else {
        $check_email_query = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($check_email_query);

        if ($result->num_rows > 0) {
            echo "<script>alert('Maaf, email anda sudah terdaftar.')</script>"; 
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Pendaftaran berhasil!')</script>";
            } else {
                echo "<script>alert('Error')</script>" . $sql . "<br>" . $conn->error;
            }
        }
    }
}

$conn->close();
?>
