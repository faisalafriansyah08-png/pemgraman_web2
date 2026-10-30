
<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS lat_dbase";

if (mysqli_query($conn, $sql)) {
    echo "Database lat_dbase berhasil dibuat";
} else {
    echo "Gagal membuat database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
