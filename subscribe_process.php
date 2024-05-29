<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_subscribe = filter_input(INPUT_POST, 'email_subscribe', FILTER_VALIDATE_EMAIL);

    if ($email_subscribe) {
        $sql = "INSERT INTO subscribe (email) VALUES ('$email_subscribe')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Terima kasih telah Subscribe :)')</script>";
        } else {
            echo "<script>alert('Error')</script> " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<script>alert('Mohon masukkan alamat email yang valid.')</script>";
    }
}

$conn->close();
?>
