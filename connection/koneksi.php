<?php
// Konfigurasi koneksi ke MySQL
$servername = "localhost"; // Nama server database Anda
$username = "root"; // Username database Anda
$password = ""; // Password database Anda
$dbname = "form_database"; // Nama database Anda
$port = "3309"; // Port database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$role = $_POST["role"];
$email = $_POST["email"];

// Query SQL untuk menyimpan data ke dalam tabel
$sql = "INSERT INTO userform (first_name, last_name, role, email) VALUES ('$firstname', '$lastname', '$role', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan ke dalam database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
